# blogy
A PHP blog solution. it's a bit like Jekyll but in PHP and better!!

#How it Works

Basically your site is hosted by default in the "_site" folder (it can be changed in the configuration file). When someone request a page, Blogy will transform all the Tags by the real content. If someone ask a page like this : http://exemple.com/articles/2016/best-article, Blogy and Apache will generate the article without creating any folders, just by using databases.

#Setup

To setup Blogy, you'll need to copy the master branch from GitHub to your server.
After doing this, design your website into the _site folder.

##The site folder will include :

*index.html
*article.html
*error.html
*_includes
  *Exemples:
    *footer.html
    *header.html
