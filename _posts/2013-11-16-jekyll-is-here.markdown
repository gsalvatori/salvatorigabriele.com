---
layout: post
title:  "Jekyll is here."
date:   2013-11-16 21:01:00
categories: news
comments: true
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

% if page.comments %

    <div id="disqus_thread"></div>
    <script type="text/javascript">
        /* * * CONFIGURATION VARIABLES: EDIT BEFORE PASTING INTO YOUR WEBPAGE * * */
        var disqus_shortname = 'gsalvatori'; // required: replace example with your forum shortname

        /* * * DON'T EDIT BELOW THIS LINE * * */
        (function() {
            var dsq = document.createElement('script'); dsq.type = 'text/javascript'; dsq.async = true;
            dsq.src = '//' + disqus_shortname + '.disqus.com/embed.js';
            (document.getElementsByTagName('head')[0] || document.getElementsByTagName('body')[0]).appendChild(dsq);
        })();
    </script>
    <noscript>Please enable JavaScript to view the <a href="http://disqus.com/?ref_noscript">comments powered by Disqus.</a></noscript>
    <a href="http://disqus.com" class="dsq-brlink">comments powered by <span class="logo-disqus">Disqus</span></a>
    
% endif %







