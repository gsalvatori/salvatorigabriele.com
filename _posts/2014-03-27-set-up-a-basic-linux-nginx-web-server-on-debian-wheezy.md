---
layout: post
title:  "Set up a basic linux nginx web server on Debian Wheezy"
date:   2014-03-27 21:58:00
categories: guides
---

Set up a basic linux webserver on Debian Wheezy is nothing but "fun", basically because you can do that with just a few simple commands on shell. First of all, we have to download and install the HTTP server and reverse proxy: <b>nginx</b>:

```bash
sudo apt-get install nginx
```

Now we have to check if www-data user and group exist:

```bash
sudo useradd www-data && sudo groupadd www-data
```

and

```bash
sudo usermod -g www-data www-data
```

Next step is to create the /var/www/ path that will contain the actual webserver, and of course we also set the right permissions:

```bash
cd /var/
sudo mkdir www
chown www-data:www-data www/
```







