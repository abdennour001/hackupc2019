var tag = document.createElement('script');

tag.src = "http://www.youtube.com/iframe_api";
var firstScriptTag = document.getElementsByTagName('script')[0];
firstScriptTag.parentNode.insertBefore(tag, firstScriptTag);
var player1;
function openYoutubeVideo(room_id) {
	   var rand = Math.random().toString();
	   console.log(room_id);
	   var vidSync1 = new VideoSync(room_id, rand);
	function onYouTubeIframeAPIReady() {
	   player1 = new YT.Player('player1', {
	       height: '200',
	       width: '200',
	       videoId: 'A9HV5O8Un6k',
	       events: {
		   'onReady': vidSync1.onPlayerReady,
		   'onStateChange': vidSync1.onPlayerStateChange
	       }
	   });

}

onYouTubeIframeAPIReady();
transitionToVideo();
}

/** Changes the elements to show the video playing and video chatting instead.
 * uses the jquery selectors of:	
 * $("li:not(.myclass)")
 * Selects all elements matched by <li> that do not have class = "myclass".
 */
function transitionToVideo() {
    $("div:not(.video)").hide();
    	
}


$(document).ready(function(){
    /* Init variables */
    var hasClicked = false;
    
    var interval = 1000;  //ms
    
    var rndString = "";
    // set the length of the string
	var stringLength = 15;
    var my_room_id = 0;
    // list containing characters for the random string
    var stringArray = ['0','1','2','3','4','5','6','7','8','9','a','b','c','d','e','f','g','h','i','j','k','l','m','n','o','p','q','r','s','t','u','v','w','x','y','z','A','B','C','D','E','F','G','H','I','J','K','L','M','N','O','P','Q','R','S','T','U','V','W','X','Y','Z'];
    var rndString = "";

    function generateToken(){

        // build a string with random characters
        for (var i = 1; i < stringLength; i++) { 
            var rndNum = Math.ceil(Math.random() * stringArray.length) - 1;
            rndString = rndString + stringArray[rndNum];
        };
    }

    generateToken();

    console.log(rndString);
    function playVideo() {
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
              });
              $.ajax({
                url: '/tes',
                  type : 'POST',
                  data: {
                      hasClicked: hasClicked,
                      rndString: rndString
                  },
                  dataType: 'JSON',
                  success: function(result){
                      my_room_id = result.my_room_id;
                      if(result.added_room === true){
                         setTimeout(checkFull,interval);
                      }else if(result.room_full === true){
                         openYoutubeVideo(my_room_id);
                      }else{
                        setTimeout(checkFull,interval);
                      }
                  },
                  error: function(jqXHR, textStatus, error){
                      console.log(error);
                  }
              });
    }



    function checkFull() {
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
              });
              $.ajax({
                url: '/check',
                  type : 'POST',
                  data: {
                    my_room_id: my_room_id,
                    rndString: rndString
                  },
                  dataType: 'JSON',
                  success: function(result){
                      if(result.full === false){
                        console.log("called on false");
                        setTimeout(checkFull,interval);
                      }else{
                          console.log("called on true");
			  openYoutubeVideo(my_room_id);
                      }
                  },
                  error: function(jqXHR, textStatus, error){
                      console.log(error);
                  }
              });
    }


    $('#ajaxSubmit').click(function(e){
        hasClicked = true;

        playVideo();
    });


    function showVideo(){
        Twilio.Video.createLocalTracks({
            audio: true,
            video: { width: 300 }
         }).then(function(localTracks) {
            return Twilio.Video.connect('{{ $accessToken }}', {
                name: '{{ $roomName }}',
                tracks: localTracks,
                video: { width: 300 }
            });
         }).then(function(room) {
            console.log('Successfully joined a Room: ', room.name);
         });
    }
});
