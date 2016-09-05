# Blogy

![release](https://img.shields.io/github/release/arguiot/blogy.svg)
[![license](https://img.shields.io/github/license/arguiot/blogy.svg)](https://opensource.org/licenses/MIT)
![downloads](https://img.shields.io/github/downloads/arguiot/blogy/latest/total.svg)
![issues](https://img.shields.io/github/issues/arguiot/blogy.svg)
![issues closed](https://img.shields.io/github/issues-closed/arguiot/blogy.svg)
![pull requests](https://img.shields.io/github/issues-pr/arguiot/blogy.svg)

A PHP blog solution. It's a bit like Jekyll but in PHP and better!!

## Table of contents

* [How it works](#how-it-works)
* [Setup](#setup)
* [File structure](#file-structure)

## How it Works

Basically your site is hosted by default in the "_site" folder (it can be changed in the configuration file). When someone request a page, Blogy will transform all the Tags by the real content. If someone ask a page like this : [https://example.com/articles/2016/best-article](https://github.com/arguiot/blogy/), Blogy and Apache will generate the article without creating any folders, just by using databases.

## Setup

To setup Blogy, you'll need to clone the master branch from GitHub to your server.
After doing this, design your website into the _site folder.

## File structure

 ```
├── blogy/_site/
|   ├── index.html
│   ├── article.html
│   └── error.html
└── _includes/
    ├── footer.html
    ├── header.html
    └── ...
 ```
