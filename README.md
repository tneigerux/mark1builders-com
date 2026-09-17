mark1builders-com
=================

# Mark 1 Builders

Hosted on Netlify, owned by Mark's email account

## URLs

Prod - https://www.mark1builders.com or https://mark1builders-com.netlify.app/

## Local Development Setup

Follow these instructions to set up your environment and run the site locally.

### macOS

Assumes Homebrew is installed. Uses OrbStack which is MacOS only.
   
* ```bash
  brew install --cask orbstack
  ```

* ```bash
  open -a OrbStack
  ```

* ```bash
  docker compose up -d
  ```

* ```bash
  open http://m1b-com-2026.orb.local
  ```



### Windows

Assumes WSL is installed. Uses Docker for Virtualization

* ```bash
  sudo apt update && sudo apt install -y docker.io docker-compose-v2
  ```

* ```bash
  sudo service docker start
  ```

* ```bash
  docker compose up -d
  ```

* ```bash
  explorer.exe http://localhost:8080
  ```


## Original generated basics

Open `index.html` in a browser to view the site.

Included:
- Responsive one-page website
- User-supplied Mark One logo and hero branding image
- Services, About, Projects, and Contact sections
- Phone and email contact buttons
- Mobile navigation
- Contact form that opens the visitor's email app

Replace the three PROJECT PHOTO placeholders with real project photos when available.
