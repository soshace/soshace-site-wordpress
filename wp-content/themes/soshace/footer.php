<footer class="main-footer" id="contacts">

  <p class="main-footer__adress-line-1"><?php the_field('footer_title'); ?></p>
  <p class="main-footer__adress-line-2"><?php the_field('footer_descr'); ?></p>

  <p class="main-footer__links">
    <a class="main-footer__facebook-link" href="<?php the_field('footer_link_facebook'); ?>" target="_blank">Facebook</a>
    <a class="main-footer__linkedin-link" href="<?php the_field('footer_link_linkedin'); ?>" target="_blank">LinkedIn</a>
    <a class="main-footer__instagram-link" href="<?php the_field('footer_link_instagram'); ?>" target="_blank">Instagram</a>
  </p>
  <p class="main-footer__links">
    <a class="main-footer__upwork-link" href="<?php the_field('footer_link_upwork'); ?>" target="_blank">Upwork</a>
    <a class="main-footer__skype-link" href="<?php the_field('footer_link_skype'); ?>">branikita</a>
    <a class="main-footer__github-link" href="<?php the_field('footer_link_github'); ?>" target="_blank">Github</a>
  </p>
  <p class="main-footer__links">
    <a class="main-footer__mail-link" href="<?php the_field('footer_link_email'); ?>">hello@soshace.com </a>
  </p>

  <p class="main-footer__links">
    <a class="main-footer__presentation-link" href="<?php $pres_link = get_field('footer_link_presentation'); echo $pres_link['url']; ?>" target="_blank">presentation</a>
  </p>

  <a class="flying-btn flying-btn--hidden scroll" href="#contact">get in touch</a>
</footer>
<div class="portfolio__modal invisible">

  <span class="portfolio__modal-close">
    <svg class="portfolio__modal-close-btn" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="20px" height="20px" viewBox="0 0 23.866 23.866" enable-background="new 0 0 23.866 23.866" xml:space="preserve">
      <path fill="white" d="M15.087,11.933l8.56-8.559c0.293-0.293,0.293-0.768,0-1.061L21.554,0.22C21.413,0.079,21.223,0,21.023,0s-0.39,0.079-0.53,0.22l-8.56,8.56L3.373,0.22c-0.282-0.282-0.78-0.282-1.061,0L0.22,2.313c-0.293,0.293-0.293,0.768,0,1.061l8.56,8.559l-8.56,8.559c-0.293,0.293-0.293,0.768,0,1.061l2.093,2.094c0.141,0.141,0.331,0.22,0.53,0.22c0.199,0,0.39-0.079,0.53-0.22l8.561-8.56l8.56,8.56c0.141,0.141,0.331,0.22,0.53,0.22s0.39-0.079,0.53-0.22l2.093-2.094c0.293-0.293,0.293-0.768,0-1.061L15.087,11.933z"/>
    </svg>
  </span>

  <div class="portfolio__modal-content">
    <h2 class="portfolio__modal-title">Modal</h2>
    <p class="portfolio__modal-description"></p>
    <a class="portfolio__modal-link" target="_blank">Demo Site</a>
    <img class="portfolio__modal-img" src="/" width="280" alt="Project Image">
  </div>

</div>

<div class="team__modal invisible">

  <span class="team__modal-close">
    <svg class="team__modal-close-btn" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="20px" height="20px" viewBox="0 0 23.866 23.866" enable-background="new 0 0 23.866 23.866" xml:space="preserve">
      <path fill="white" d="M15.087,11.933l8.56-8.559c0.293-0.293,0.293-0.768,0-1.061L21.554,0.22C21.413,0.079,21.223,0,21.023,0s-0.39,0.079-0.53,0.22l-8.56,8.56L3.373,0.22c-0.282-0.282-0.78-0.282-1.061,0L0.22,2.313c-0.293,0.293-0.293,0.768,0,1.061l8.56,8.559l-8.56,8.559c-0.293,0.293-0.293,0.768,0,1.061l2.093,2.094c0.141,0.141,0.331,0.22,0.53,0.22c0.199,0,0.39-0.079,0.53-0.22l8.561-8.56l8.56,8.56c0.141,0.141,0.331,0.22,0.53,0.22s0.39-0.079,0.53-0.22l2.093-2.094c0.293-0.293,0.293-0.768,0-1.061L15.087,11.933z"/>
    </svg>
  </span>

  <div class="team__modal-content">
    <img class="team__modal-photo" src="/" width="280" alt="Member Photo">
    <div class="team__modal-text">
      <h2 class="team__modal-name">Modal</h2>
      <p class="team__modal-position"></p>
      <p class="team__modal-info"></p>
    </div>
  </div>

</div>


<!-- Yandex.Metrika counter -->
<script type="text/javascript">
    (function (d, w, c) {
        (w[c] = w[c] || []).push(function() {
            try {
                w.yaCounter23765065 = new Ya.Metrika({
                    id:23765065,
                    clickmap:true,
                    trackLinks:true,
                    accurateTrackBounce:true,
                    webvisor:true
                });
            } catch(e) { }
        });

        var n = d.getElementsByTagName("script")[0],
            s = d.createElement("script"),
            f = function () { n.parentNode.insertBefore(s, n); };
        s.type = "text/javascript";
        s.async = true;
        s.src = "https://mc.yandex.ru/metrika/watch.js";

        if (w.opera == "[object Opera]") {
            d.addEventListener("DOMContentLoaded", f, false);
        } else { f(); }
    })(document, window, "yandex_metrika_callbacks");
</script>
<noscript><div><img src="https://mc.yandex.ru/watch/23765065" style="position:absolute; left:-9999px;" alt="" /></div></noscript>
<!-- /Yandex.Metrika counter -->

<?php wp_footer(); ?>

</body>
</html>