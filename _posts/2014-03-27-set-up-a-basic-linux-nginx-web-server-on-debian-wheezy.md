---
layout: post
title:  "Set up a basic linux nginx web server on Debian Wheezy"
date:   2014-03-27 21:58:00
categories: guides
---

Set up a basic linux webserver on Debian Wheezy is nothing but "fun", basically because you can do that with just a few simple commands on shell. First of all, we have to download and install the HTTP server and reverse proxy: <b>nginx</b>

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

Next step is to create the /var/www/ path that will contain the actual webserver, and of course we also have to set the right permissions:

```bash
cd /var/
sudo mkdir www
chown www-data:www-data www/
```

We can create a welcome HTML page:

```bash
sudo nano index.html
```

```bash
sudo chown www-data:www-data index.html
```

In theory, we can already start our web server and notice changes on localhost (http://127.0.0.1):

```bash
sudo service nginx start
```

but there is still an additional step required to complete the procedure. We have to edit nginx config file with:

```bash
sudo nano /etc/nginx/sites-enabled/default
```

in order to set /var/www as root path:

```bash
server {

    listen      80; ## listen for ipv4; this line is default and implied
    #listen     [::]:80 default_server ipv6only=on; ## listen for ipv6

    root /var/www;

    index index.html index.htm;

    server_name your-site.com;

}
```
and we have finally done.







