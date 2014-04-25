---
layout: post
title:  "Bypass Fn keys malfunctioning on Ubuntu 14.04 using xbindkeys"
date:   2014-04-25 22:49:00
categories: guides
---

After upgrading my laptop OS (previously Ubuntu 12.04 and now the new long term support version of it), I found an annoying bug with volume control via function keys. At first, I thought was the usual bug related to the GRUB bootloader that gave similar symptoms even in later versions, and that can be solved with these simple steps:

{% highlight bash %}
sudo nano /etc/default/grub
{% endhighlight %}

then, edit

{% highlight bash %}
GRUB_CMDLINE_LINUX_DEFAULT="quiet splash"
{% endhighlight %}

to

{% highlight bash %}
GRUB_CMDLINE_LINUX_DEFAULT="quiet splash acpi_osi="
{% endhighlight %}

And finally, updating GRUB with

{% highlight bash %}
sudo update-grub
{% endhighlight %}

but when I reboot, the problem was <b>NOT</b> solved. So I decided to don't waste more time and use the <a href="http://www.nongnu.org/xbindkeys/xbindkeys.html"><b>xbindkeys</b></a> utility that allows you to execute linux commands by setting keyboard shortcuts. Let's see how to use it properly:

First of all, you have to install it on your linux machine, together with xvkbd (a virtual graphical keyboard program)

{% highlight bash %}
sudo apt-get install xbindkeys
{% endhighlight %}

{% highlight bash %}
sudo apt-get install xvkbd
{% endhighlight %}








