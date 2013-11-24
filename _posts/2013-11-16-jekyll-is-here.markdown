---
layout: post
title:  "Jekyll is here"
date:   2013-11-16 21:01:00
categories: news
---

Jekyll is here. I moved the entire blog and website on my github page, using this great blog platform written in Ruby. The domain is not changed, always provided by OVH, so I just create an <b>A record</b> on my DNS zone to point it towards Github IP address.

{% highlight bash %}
gabriele @ osiris { ~ } [ sab nov 16 ] [ 07:50 ]
> dig salvatorigabriele.com +nostats +nocomments +nocmd

; <<>> DiG 9.8.1-P1 <<>> salvatorigabriele.com +nostats +nocomments +nocmd
;; global options: +cmd
;salvatorigabriele.com.		IN	A
salvatorigabriele.com.	80895	IN	A	204.232.175.78

{% endhighlight%}









