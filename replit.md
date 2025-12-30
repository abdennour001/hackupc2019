# Video Calls - Vue.js Application

## Overview
A Vue.js 2 application bootstrapped with Vue CLI. This is the default Vue starter template.

## Project Structure
- `src/` - Source code
  - `main.js` - Application entry point
  - `App.vue` - Root component
  - `components/` - Vue components
  - `assets/` - Static assets
- `public/` - Public static files
- `vue.config.js` - Vue CLI configuration

## Development
The dev server runs on port 5000 with `NODE_OPTIONS=--openssl-legacy-provider` to support the older webpack version.

### Commands
- `npm run serve` - Start development server
- `npm run build` - Build for production (outputs to `dist/`)
- `npm run lint` - Lint and fix files

## Deployment
Configured as a static deployment. The build command runs `npm run build` and serves the `dist/` directory.

## Recent Changes
- December 30, 2025: Configured for Replit environment with port 5000 and host bypass for development proxy
