<?php

function overshare_buttons($content)
{
    $overshareURL = urlencode(get_permalink());
    $overshareTitle = str_replace(' ', '%20', get_the_title());
    $overshareThumbnail = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), 'full');

    $twitterURL = 'https://twitter.com/intent/tweet?text='.$overshareTitle.'&amp;url='.$overshareURL.'&amp;via=Overshare';
    $facebookURL = 'https://www.facebook.com/sharer/sharer.php?u='.$overshareURL;
    //$facebookURL = 'https://www.facebook.com/dialog/feed?app_id='.$appID.'&amp;display=popup&amp;name='.$overshareTitle.'&amp;link='.$overshareURL.'&amp;redirect_uri=https://www.facebook.com';  // Need a FB App ID to work
    $googleURL = 'https://plus.google.com/share?url='.$overshareURL;
    $pinterestURL = 'https://pinterest.com/pin/create/button/?url='.$overshareURL.'&amp;media='.$overshareThumbnail[0].'&amp;description='.$overshareTitle;
    $tumblrURL = 'http://tumblr.com/share?s=&v=3&t='.$overshareTitle.'&u='.$overshareURL;
    $bloggerURL = 'https://www.blogger.com/blog_this.pyra?t&u='.$overshareURL.'&n='.$overshareTitle;
    $manageWPURL = 'http://managewp.org/share/form?url='.$overshareURL;
    $myspaceURL = 'https://myspace.com/post?u='.$overshareURL;
    $redditURL = 'http://reddit.com/submit?url='.$overshareURL.'&title='.$overshareTitle;
    $diggURL = 'http://digg.com/submit?phase=2%20&amp;url='.$overshareURL.'&amp;title='.$oveershareTitle;
    $hackernewsURL = 'https://news.ycombinator.com/submitlink?u='.$overshareURL.'&t='.$overshareTitle;
    $newsvineURL = 'http://www.newsvine.com/_tools/seed&save?u='.$overshareURL.'&h='.$overshareTitle;
    $meneameURL = 'http://www.meneame.net/submit.php?url='.$overshareURL;
    $echojsURL = 'http://www.echojs.com/submit?u='.$overshareURL.'&t='.$overshareTitle;
    $stumbleuponURL = 'http://www.stumbleupon.com/badge/?url='.$overshareURL;
    $linkedInURL = 'https://www.linkedin.com/shareArticle?mini=true&url='.$overshareURL.'&amp;title='.$overshareTitle;
    $viadeoURL = 'https://www.viadeo.com/?url='.$overshareURL.'&amp;title='.$overshareTitle;

    // Mail

    $mailer = 'mailto:?subject='.$overshareTitle.'&amp;body='.$overshareURL;
    $gmailURL = 'https://mail.google.com/mail/u/0/?view=cm&fs=1&su='.$overshareURL.'&body='.$overshareTitle.'&ui=2&tf=1';
    $yahooURL = 'http://compose.mail.yahoo.com/?body='.$overshareURL;
    $AOLURL = 'http://webmail.aol.com/Mail/ComposeMessage.aspx?subject='.$overshareTitle.'&body='.$overshareURL;
    $mailruURL = 'http://connect.mail.ru/share?url='.$overshareURL.'&title='.$overshareTitle;

    // Texting

    $smsURL = 'sms:&body='.$overshareURL;  // Research a better way to include this.  Mobile detection?
    $whatsappURL = 'whatsapp://send?text='.$overshareTitle.' '.$overshareURL;
    $lineURL = 'line://msg/text/'.$overshareURL.'%20'.$overshareTitle;
    $telegramURL = 'tg://msg?text='.$overshareURL.'%20'.$overshareTitle;
    $viberURL = 'viber://forward?text='.$overshareURL.'%20'.$overshareTitle;

    // Bookmarking and Social Sharers

    $flipboardURL = 'https://share.flipboard.com/bookmarklet/popout?url='.$overshareURL.'&title='.$overshareTitle;
    $pocketURL = 'https://getpocket.com/save?title='.$overshareTitle.'&url='.$overshareURL;
    $instapaperURL = 'https://www.instapaper.com/text?u='.$overshareURL;
    $evernoteURL = 'http://www.evernote.com/clip.action?url='.$overshareURL.'&title='.$overshareTitle;
    $deliciousURL = 'https://delicious.com/save?v=5&noui&jump=close&url='.$overshareURL.'&amp;title='.$overshareTitle;
    $bufferURL = 'https://bufferapp.com/add?url='.$overshareURL.'&amp;text='.$overshareTitle;

    // Foreign Social Networks

    $vkontakteURL = 'http://vkontakte.ru/share.php?url='.$overshareURL;
    $odnoklassnikiURL = 'http://www.odnoklassniki.ru/dk?st.cmd=addShare&st._surl='.$overshareURL.'&title='.$overshareTitle;
    $weiboURL = 'http://service.weibo.com/share/share.php?url='.$overshareURL.'&title='.$overshareTitle.'&pic='.$overshareThumbnail[0];
    $kaixinURL = 'http://www.kaixin001.com/repaste/share.php?rurl='.$overshareURL.'&rtitle='.$overshareTitle;
    $qzoneURL = 'http://sns.qzone.qq.com/cgi-bin/qzshare/cgi_qzshare_onekey?url='.$overshareURL;
    $xingURL = 'https://www.xing.com/social_plugins/share?h=1;url='.$overshareURL;
    $renrenURL = 'http://share.renren.com/share/buttonshare.do?link='.$overshareURL.'&title='.$overshareTitle;
    $baiduURL = 'http://apps.hi.baidu.com/share/?url='.$overshareURL.'&title='.$overshareTitle;

    // Printing

    // Add print button
    $printfriendlyURL = 'http://www.printfriendly.com/print/?url='.$overshareURL;

    // Miscellaneous

    //$flattrURL = 'https://flattr.com/submit/auto?user_id='.$accountID.'&url='.$overshareURL.'&title='.$overshareTitle; // NEED a Flattr username to work
    $yummlyURL = 'http://www.yummly.com/urb/verify?url='.$overshareURL.'&title='.$overshareURL.'&image='.$overshareThumbnail[0].'&yumtype=button';
    $embedlyURL = 'http://embed.ly/code?url='.$overshareURL;
    $amazonURL = 'http://www.amazon.com/gp/wishlist/static-add?u='.$overshareURL.'&t='.$overshareTitle;
}

    // TO DO: Decide whether or not to create a shortcode with the data or just a theme library?  Should this be independent of Wordpress?
