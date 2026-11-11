Mark One Builders & Home Improvement — Website
================================================

OVERVIEW
--------
Static HTML/CSS website. The entry point is index.html, with styles in
styles.css and images stored alongside those files.

HOSTING & ACCOUNT OWNERSHIP
---------------------------
Hosting provider: Netlify
Netlify account owner: mark@mark1builders.com

Source control follows standard Git Flow. The intended branch and deployment
mapping is:
  - main: Production
  - develop: Staging
  - feature/*: Feature development, merged through pull requests
  - release/* and hotfix/*: Used when needed under the Git Flow process

CI/CD & PULL REQUEST DEPLOYMENT
------------------------------
Changes are proposed and reviewed through pull requests (PRs); do not push
changes directly to main or develop. The intended workflow is:

1. Create a feature branch from develop and make the website changes.
2. Open a PR targeting develop for review. Merge after approval/checks.
3. Netlify deploys the updated develop branch to staging when the PR merges.
4. Validate the staged site, including layout, links, and the contact form.
5. Open a PR from develop into main for the production release.
6. Merge after approval/checks. Netlify deploys main to production.
7. For an urgent production fix, use a hotfix branch and PR to main, then
   ensure the change is also merged back into develop.

Netlify can provide Deploy Previews for PRs, which may be used to review
changes before merging if enabled in the Netlify site settings.

NETLIFY CONFIGURATION NOTES
---------------------------
This repository contains a static site and does not need a build step.
The site's publish directory should be the directory containing index.html
(typically the repository root). Configure Netlify's production branch as
main and the staging/branch deployment for develop in the Netlify dashboard.

The branch-to-environment mapping and PR process above describe the team's
intended pipeline; verify that the connected repository, branch deploys,
Deploy Previews, PR checks, and branch protection rules are actually configured
in Git hosting and Netlify before relying on automatic deployments.

CONTACT FORM (FORMSPREE)
-----------------------
The contact form in index.html uses Formspree's Basic HTML POST integration.
Endpoint currently supplied: https://formspree.io/f/info@mark1builders.com

The provided endpoint is not in Formspree's usual unique form-ID format.
Before going live, confirm the real endpoint in the Formspree dashboard,
update the form action in index.html if required, and submit a test request
on both staging and production. Verify delivery to the configured recipient.

FILES
-----
index.html                Main page and contact form
styles.css                Site styling and responsive layout
hero.jpg                  Hero image
about-project.png         About section photo
logo.png                  Company logo
kristopher-neiger.png     Team portrait
marek-iwaszkiewicz.png    Team portrait
README.txt                Project and deployment information
