﻿<!DOCTYPE html>
<!--
* Copyright (C) 2019-2020 Cloudonix, Inc <https://cloudonix.io>
* Copyright (C) 2012-2016 Doubango Telecom <http://www.doubango.org>
* License: BSD
* This file is part of Open Source sipML5 solution <http://www.sipml5.org>
-->
<html lang="en">
<head>
    <meta charset="utf-8"/>
    <title>sipML5-NG - A Modernised SIP over WebSocket Library, based on sipML5</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <meta name="Keywords"
          content="Cloudonix, cloudonix.io, doubango, VoIP, HTML5, WebRTC, RTCWeb, SIP, IMS, Video chat, VP8 "/>
    <meta name="Description" content="HTML5 SIP client using WebRTC framework"/>
    <meta name="author" content="Cloudonix, Inc."/>

    <!-- Le styles -->
    <link href="./assets/css/bootstrap.css" rel="stylesheet"/>
    <style type="text/css">
        body {
            padding-top: 80px;
            padding-bottom: 40px;
        }

        tr.spaceUnder > td {
            padding-bottom: 2em;
        }
    </style>
    <link href="./assets/css/bootstrap-responsive.css" rel="stylesheet"/>

    <!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
    <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->

    <!-- Le fav and touch icons -->
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="./assets/ico/apple-touch-icon-114-precomposed.png"/>
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="./assets/ico/apple-touch-icon-72-precomposed.png"/>
    <link rel="apple-touch-icon-precomposed" href="./assets/ico/apple-touch-icon-57-precomposed.png"/>

    <script type="text/javascript" src="https://apis.google.com/js/plusone.js"></script>
</head>

<body>

<div class="navbar navbar-fixed-top">
    <div class="navbar-inner">
        <div class="container">
            <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </a>
            <a class="brand" target=_blank href="https://cloudonix.io">Cloudonix, Inc.</a>
            <div class="nav-collapse">
                <ul class="nav">
                    <li class="active"><a href="index.html?svn=300">Home</a></li>
                    <li><a href="https://github.com/cloudonix/sipml5-ng" target="_blank">Source code</a></li>
                    <li><a href="docgen/index.html?svn=300">Programmer's Guide</a></li>
                    <li><a href="https://cloudonix.io/schedule-meeting">Contact</a></li>
                </ul>
            </div><!--/.nav-collapse -->
        </div>
    </div>
</div>

<div class="container">

    <!-- Main hero unit for a primary marketing message or call to action -->
    <div class="hero-unit">
        <h2>A modernised SIP over WebSocket Library - based on sipML5</h2>
        <p>
            On May 14th, 2012 SIPml5, the world's first open Source HTML SIP client was released. SIPml5 had captivated
            the mind of RTC pioneers in the open source communities. However, as time pregressed, its creator Doubango
            Telecom had abandoned the project. On Feb 8th, 2018 Doubango Telecom had released their final version of
            SIPml5 (version 2.1.4) - and since then the code base had remained unmaintained.<br/><br/>
            On June 17th, 2020 Cloudonix released its fork of the original SIPml5 project - SIPml5-NG. The new project
            picks up the project from that point and merges back to the project various patches and updates, provided by
            the Open Source community and the various SIPml5 developer community.<br/><br/>
            SIPml5-NG is an open source (<a target=_blank href="http://opensource.org/licenses/BSD-3-Clause">BSD
            license</a>) HTML5 SIP client entirely written in javascript for integration in social networks (FaceBook,
            Twitter, Google+), online games, e-commerce websites, email signatures... No extension, plugin or gateway is
            needed. The media stack relies on <a href="http://en.wikipedia.org/wiki/WebRTC"
                                                 target="_blank">WebRTC</a>.<br/><br/>
            The client can be used to connect to any SIP or IMS network from your preferred browser to make and receive
            audio/video calls and instant messages.
        </p>
        <p><a class="btn btn-primary btn-large" href="call.htm?svn=300" target="_blank">Enjoy our live demo &raquo;</a>
        </p>
    </div>


    <table>
        <tr class="spaceUnder">
            <td>
                <table>
                    <tr>
                        <td><h2><a name="aSipSdpStack">Javascript SIP/SDP stack</a></h2></td>
                    </tr>
                    <tr class="spaceUnder">
                        <td>
                            <p>The SIP and SDP stacks (<b>~1 Mo</b>) are entirely written in javascript and the network
                                transport uses WebSockets as per <a
                                        href="https://tools.ietf.org/html/rfc7118">rfc7118</a>.
                                The <a href="call.htm?svn=300" target="_blank">live demo</a> doesn't require any
                                installation and can be used to connect to any SIP server using UDP, TCP or TLS
                                transports.
                            </p>
                            <p>Short but not exhaustive list of supported features:</p>
                            <ul>
                                <li><b>Works on Chrome, Firefox, IE, Safari, Opera and Bowser</b></li>
                                <li>Audio / Video call</li>
                                <li><a href="https://code.google.com/p/sipml5/wiki/ScreenShare" target=_blank>Screen/Desktop
                                    sharing from Chrome to <b><u>any</u></b> SIP client</a></li>
                                <li>Instant messaging</li>
                                <li>Presence</li>
                                <li>Call Hold / Resume</li>
                                <li>Explicit Call transfer</li>
                                <li>Multi-line and multi-account</li>
                                <li>Dual-tone multi-frequency signaling (DTMF) using SIP INFO</li>
                                <li>Click-to-Call</li>
                                <li><a href="https://github.com/DoubangoTelecom/telepresence/" target=_blank>SIP
                                    TelePresence (Video Group chat)</a></li>
                                <li>3GPP IMS standards</li>
                            </ul>
                            <p><a class="btn" href="https://github.com/cloudonix/sipml5-ng" target="_blank">View
                                details &raquo;</a></p>
                        </td>
                    </tr>
                </table>
            </td>
        </tr>

        <tr>
            <td>
                <table>
                    <tr>
                        <td><h2><a name="aMediaStack">Media Stack</a></h2></td>
                    </tr>
                    <tr>
                        <td>
                            <p>The media stack depends on <a href="https://en.wikipedia.org/wiki/WebRTC">WebRTC (Web
                                Real Time Communication)</a> which is natively supported by the following browsers:<br/>
                            <ul>
                                <li>Google Chrome</li>
                                <li>Firefox</li>
                                <li>Safari</li>
                                <li>Microsoft Edge</li>
                            </ul>
                            </p>
                        </td>
                    </tr>
                </table>
            </td>
        </tr>

        <tr>
            <td>
                <table>
                    <tr>
                        <td><h2><a name="aInteroperability">Interoperability</a></h2></td>
                    </tr>
                    <tr>
                        <td>
                            <p>Using sipml5 and <a href="http://webrtc2sip.org">webrtc2sip.org</a> you can call any
                                SIP-legacy endpoint or connected with any SIP compatible network.<br/><br/>
                                Our testing and verification process includes testing using the following WebRTC/VoIP
                                tools:<br/><br/>
                            <ul>
                                <li><strong>SIP over WebSocket Server</strong><br/>
                                    <ul>
                                        <li>Asterisk</li>
                                        <li>Freeswitch</li>
                                        <li>Kamailio</li>
                                        <li>OpenSIPS</li>
                                    </ul>
                                    <br/>
                                </li>
                                <li><strong>SIP over WebSocket Endpoints</strong><br/>
                                    <ul>
                                        <li>webrtc.cloudonix.io</li>
                                    </ul>
                                    <br/>
                                </li>
                                <li><strong>Desktop Browsers</strong><br/>
                                    <ul>
                                        <li>Google Chrome</li>
                                        <li>Firefox</li>
                                        <li>Safari</li>
                                        <li>Microsoft Edge</li>
                                    </ul>
                                    <br/>
                                </li>
                                <li><strong>Mobile Browsers</strong><br/>
                                    <ul>
                                        <li>Google Chrome</li>
                                        <li>Firefox</li>
                                        <li>Safari</li>
                                    </ul>
                                    <br/>
                                </li>
                            </ul><br/>
                            <strong>The following browsers are known to be non-compatible or do not support WebRTC natively:</strong>
                            <ul>
                                <li>Opera</li>
                                <li>Facebook Mobile Browser</li>
                                <li>Mobile browsers provided by low end mobile vendors</li>
                            </ul>
                            <br/>
                            </p>
                        </td>
                    </tr>
                </table>
            </td>
        </tr>

        <tr>
            <td>
                <table>
                    <tr>
                        <td><h2><a name="aLicense">License</a></h2></td>
                    </tr>
                    <tr>
                        <td>
                            <p>The code is released under <a target=_blank
                                                             href="http://opensource.org/licenses/BSD-3-Clause">BSD
                                terms</a>. For more information: <a
                                    href="https://github.com/cloudonix/sipml5-ng/blob/wiki/License.md" target=_blank>https://github.com/cloudonix/sipml5-ng/blob/wiki/License.md</a>
                            </p>
                        </td>
                    </tr>
                </table>
            </td>
        </tr>

        <tr class="spaceUnder">
            <td>
                <table>
                    <tr>
                        <td><h2><a name="aInteroperability">Programing with sipML5 API</a></h2></td>
                    </tr>
                    <tr class="spaceUnder">
                        <td>
                            <p>
                                The <a href="docgen/index.html">API</a> is designed with love to make it easy to develop
                                rich and robust HTML5 applications in few lines of code. <br/>
                                No need to know how SIP work to start writing your code. Using this <a
                                    href="docgen/index.html">API</a>, it will be a piece of cake to write HTML5 VoIP
                                applications. <br/>
                                Below, a very compact code showing how to initialize the engine, start the stack and
                                make video call from <i>bob</i> to <i>alice</i> in <b>less than 15 lines</b>:
                            </p>
<pre><code>
<a href="docgen/symbols/SIPml.html#.init">SIPml.init</a>(function(e) {
    var stack = new <a href="docgen/symbols/SIPml.Stack.html#constructor">SIPml.Stack</a>({
        realm: 'example.org',
        impi: 'bob',
        impu: 'sip:bob@example.org',
        password: 'mysecret',
        events_listener: {
            events: 'started',
            listener: function(<a href="docgen/symbols/SIPml.Stack.Event.html">e</a>) {
                var callSession = stack.<a href="docgen/symbols/SIPml.Stack.html#newSession">newSession</a>('call-audiovideo', {
                        video_local: document.getElementById('video-local'), // &lt;video id="video-local" .../&gt;
                        video_remote: document.getElementById('video-remote'), // &lt;video id="video-remote" .../&gt;
                        audio_remote: document.getElementById('audio-remote') // &lt;audio id="audio-remote" .../&gt;
                        });
                        callSession.<a href="docgen/symbols/SIPml.Session.Call.html#call">call</a>('alice');
            }
        }
    });
    stack.<a href="docgen/symbols/SIPml.Stack.html#start">start</a>();
});
</code></pre>
                        </td>
                    </tr>
                </table>
            </td>
        </tr>

    </table>

    <table>
        <tr>
            <td>
                <iframe id="ytplayer" type="text/html" width="512" height="312"
                        src="https://www.youtube.com/embed/ro3FFNx7d-g?autoplay=0&origin=http://sipml5.org"
                        frameborder="0"></iframe>
                &nbsp;&nbsp;
            </td>
            <td>
                <iframe id="Iframe1" type="text/html" width="512" height="312"
                        src="https://www.youtube.com/embed/7HEMyxAnATI?autoplay=0&origin=http://sipml5.org"
                        frameborder="0"></iframe>
            </td>
        </tr>
        <tr>
            <td align="center"><i>Call between Google Chrome and iPad device</i></td>
            <td align="center"><i>Call between Google Chrome and Android device</i></td>
        </tr>
    </table>

    <!--
    <hr/>
    <g:plus href="https://plus.google.com/107177632824809995368" rel="author"></g:plus>
    <br/>
    <a href="https://twitter.com/DoubangoTelecom" class="twitter-follow-button" data-show-count="false"
       data-size="large">Follow @DoubangoTelecom</a>

    <hr/>
    -->
    <footer>
        <p><br/>
            &copy; Cloudonix, Inc 2019-2020</p>
        <i>Bridging the chasm between voice, data, AI and automation.</i>
    </footer>
</div> <!-- /container -->

<!-- Le javascript
================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<script type="text/javascript" src="./assets/js/jquery.js"></script>
<script type="text/javascript" src="./assets/js/bootstrap-transition.js"></script>
<script type="text/javascript" src="./assets/js/bootstrap-alert.js"></script>
<script type="text/javascript" src="./assets/js/bootstrap-modal.js"></script>
<script type="text/javascript" src="./assets/js/bootstrap-dropdown.js"></script>
<script type="text/javascript" src="./assets/js/bootstrap-scrollspy.js"></script>
<script type="text/javascript" src="./assets/js/bootstrap-tab.js"></script>
<script type="text/javascript" src="./assets/js/bootstrap-tooltip.js"></script>
<script type="text/javascript" src="./assets/js/bootstrap-popover.js"></script>
<script type="text/javascript" src="./assets/js/bootstrap-button.js"></script>
<script type="text/javascript" src="./assets/js/bootstrap-collapse.js"></script>
<script type="text/javascript" src="./assets/js/bootstrap-carousel.js"></script>
<script type="text/javascript" src="./assets/js/bootstrap-typeahead.js"></script>

<!-- GOOGLE ANALYTICS -->
<script type="text/javascript">
    var gaJsHost = (("https:" == document.location.protocol) ? "https://ssl." : "http://www.");
    document.write(unescape("%3Cscript src='" + gaJsHost + "google-analytics.com/ga.js' type='text/javascript'%3E%3C/script%3E"));
</script>

<script type="text/javascript">
    try {
        var pageTracker = _gat._getTracker("UA-6868621-19");
        pageTracker._trackPageview();
    } catch (err) {
    }
</script>

<!-- GITHUB -->
<a href="https://github.com/cloudonix/sipml5-ng"><img style="position: absolute; top: 30px; left: 0; border: 0;"
                                                         src="https://camo.githubusercontent.com/567c3a48d796e2fc06ea80409cc9dd82bf714434/68747470733a2f2f73332e616d617a6f6e6177732e636f6d2f6769746875622f726962626f6e732f666f726b6d655f6c6566745f6461726b626c75655f3132313632312e706e67"
                                                         alt="Fork me on GitHub"
                                                         data-canonical-src="https://s3.amazonaws.com/github/ribbons/forkme_left_darkblue_121621.png"></a>
</body>
</html>
