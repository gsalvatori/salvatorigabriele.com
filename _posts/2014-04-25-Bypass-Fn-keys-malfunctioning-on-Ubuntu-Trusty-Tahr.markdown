---
layout: post
title:  "Bypass Fn keys malfunctioning on Ubuntu 14.04 (Trusty Tahr)"
date:   2014-04-25 22:49:00
categories: guides
---

After upgrading my laptop OS (previously Ubuntu 12.04 and now the new long term support version of it), I found an annoying bug with volume control via function keys. At first, I thought the usual bug related to the GRUB bootloader that gave similar symptoms even in later versions, that can be solved with these simple steps:

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

but when I reboot, the problem was <b>NOT</b> solved. So I decided to not waste more time and use the <u>xbindkeys</u> utility that allows you to execute linux commands by setting keyboard shortcuts.

