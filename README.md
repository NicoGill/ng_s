# ng_s <!-- omit in toc -->

A starter theme used by Nicolas Gillium forked from ng_s by [WebDevStudios](https://wdunderscores.com).

[Nicolas Gillium. French freelance web developer.](https://nicolas-gillium.fr/contact/)

## Table of Contents <!-- omit in toc -->

- [Introduction](#introduction)
- [Getting Started](#getting-started)
	- [Prerequisites](#prerequisites)
	- [Install](#install)
- [Setup](#setup)
	- [Development](#development)

## Introduction

Hello there! I am a versatile starter theme known as `ng_s`, or `ngunderscores`. My foundation is built primarily on PHP templates, but I offer the flexibility to incorporate custom templates through the Site Editor. It's worth noting that I'm designed for customization, so it's best not to use me as a Parent Theme. Instead, harness my potential to transform me into the most amazing WordPress theme you can envision – that's what I'm here for!

I come equipped with a host of robust web technologies, including [Tailwind](https://www.tailwindcss.com), [npm](https://www.npmjs.com/), [webpack](https://webpack.js.org/), [Sass](http://sass-lang.com/), and [PostCSS](https://github.com/postcss/postcss). To ensure your code aligns with [WordPress standards](https://make.wordpress.org/core/handbook/best-practices/coding-standards/) and stays clean, I leverage [@wordpress/scripts](https://developer.wordpress.org/block-editor/packages/packages-scripts/) for CSS and JavaScript linting. What's more, I take accessibility seriously and proudly comply with both WCAG 2.1AA and Section 508 standards right from the start.

I also come with the Site Editor activated, providing you with even more versatility and ease in crafting your WordPress theme. Whether you're customizing templates or utilizing the Site Editor, I'm here to support your creative journey. And remember, I do require at least PHP 8.0 to be activated to unlock my full potential.

## Getting Started

### Prerequisites

Because I compile and bundle assets via NPM scripts, basic knowledge of the command line and the following dependencies are required:

- [Node](https://nodejs.org) (v18+)
- [NPM](https://npmjs.com) (v9+)
- [Composer](https://getcomposer.org/)

### Install

Set me up manually:

1. [Download](https://github.com/NicoGill/ng_s) the repo and extract the zip into your `wp-content/themes` directory and rename `ng_s` to fit your needs.

2. Find & Replace

You'll need to change all instances of the name: `ng_s`.

- Search for: `@package ng_s` and replace with: `@package project_name` to capture the package name
- Update `"NicolasGillium\ng_s,ng_s"` to: `"CompanyName\project_name,project_name"` (with double quotes) in phpcs.xml.dist
- Search for: `NicolasGillium\ng_s` and replace with: `CompanyName\project_name` to capture the namespaces
- Update `"nicolasgillium\ng_s"` to `"companyname/project_name"` (with double quotes) in composer.json
- Search for: `, 'ng_s'` and replace with: `, 'project_name'` (inside backticks) to capture the text domain
- Update `Text Domain: ng_s` to: `Text Domain: project_name` in style.css
- Update `"ng_s"` to: `"project_name"` (with double quotes) in phpcs.xml.dist and package.json
- Update `'ng_s'` to: `'project_name'` (with single quotes) in inc/setup/setup.php
- Search for: `ng_s_` and replace with: `project_name_` to capture all the function names
- Search for: `'ng_s-` and replace with: `'project_name-` to capture prefixed handles
- Search for `ng_s.pot` and replace with: `project_name.pot` to capture translation files
- Search for `ngunderscores.test` and replace with: `project_name.test` to match your local development URL
- Edit the theme information in the header of style.scss to meet your needs

## Setup

From the command line, change directories to your new theme directory:

```bash
cd /wp-content/themes/your-theme
```

Install theme dependencies and trigger an initial build.

>Note: You will need to have Composer 2 and NPM 9 installed first.

```bash
npm i && composer i
```

### Development

From the command line, type any of the following to perform an action:

Command | Action
:- | :-
`npm run watch` | Builds assets and starts Live Reload and Browsersync servers
`npm run start` | Builds assets and starts Live Reload server
`npm run build` | Builds production-ready assets for a deployment
`npm run lint` | Check all CSS, JS, MD, and PHP files for errors
`npm run format` | Fix all CSS, JS, MD, and PHP formatting errors automatically
`npm run report` | Gives detailed information on coding standards violations in PHP code

### Building a block with wpcli

In order to build a block, run the following wpcli script.

Note: If you're using Local, you can open the shell from within Local to do this. `Sitename -> Open site shell`.

```bash
wp wds create_portable_block myblock --title="This is myblock" --desc="This block is used for wds." --keyword="myblock" --icon="table-row-before" --namespace="wds"
```

This will scaffold out a block inside of the `blocks` folder in the theme. Replace `myblock` with the name of your block and update the other items `title`, `desc`, `keyword`, `icon`, `namespace` with the appropriate information.

Note: If you don't see your new block available under the block listing in the editor after following the above steps, try changing the namespacing in your block's `block.json` to the following format `your-namespace/blockname` and check again.
