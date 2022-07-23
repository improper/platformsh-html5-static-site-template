# HTML5 Static Site Template for Platform.sh

<p align="center">
<a href="https://console.platform.sh/projects/create-project?template=https://github.com/improper/platformsh-html5-static-site-template/blob/main/.platform.template.yaml&utm_content=html5&utm_source=github&utm_medium=button&utm_campaign=deploy_on_platform">
    <img src="https://platform.sh/images/deploy/lg-blue.svg" alt="Deploy on Platform.sh" width="180px" />
</a>
</p>

This template deploys a basic HTML5 static site with 404 handling to Platform.sh.

No Static Site Generator is required. Simply edit your HTML files in `public`, add your assets, and `git push platform`.

## About

* `.platform` directory has been added to enable cloud deployments to Platform.sh
* `.platformsh.template.yaml` has been added to enable the Deploy on Platform button. This file is optional.

## Features

* No SSGs needed. Just modify your HTML and add your assets!
* 404 Handling.

## Post-deployment

1. Use `git clone` to fetch your project from Platform.sh
2. Use `git push platform {branch}` to deploy your changes

> **Tip** The Platform.sh CLI provides a number of useful options such as `platform project:get`
