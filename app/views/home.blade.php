<!DOCTYPE HTML>
<html lang="sk">
<head>
    <!-- ========= 
    Title and Metas 
    ========= -->
    <meta charset="utf-8">
    <title>Hackathon SNG | 7.-8.10. 2016</title>
    <meta name="keywords" content="sng, art, data, digitalizácia, hackathon, open data">
    <meta name="author" content="lab.SNG">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <meta name="format-detection" content="telephone=no">
    
    <meta property="og:title" content="Hackathon SNG" />
    <meta property="og:type" content="website" />
    <meta property="og:url" content="{{ URL::to('/') }}" />
    <meta property="og:image" content="{{ URL::to('/img/fb-image.png') }}" />

    <!-- ========= 
    Favicons 
    ========= -->
    <link rel="apple-touch-icon" sizes="57x57" href="/apple-touch-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="114x114" href="/apple-touch-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="72x72" href="/apple-touch-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="144x144" href="/apple-touch-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="60x60" href="/apple-touch-icon-60x60.png">
    <link rel="apple-touch-icon" sizes="120x120" href="/apple-touch-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="76x76" href="/apple-touch-icon-76x76.png">
    <link rel="apple-touch-icon" sizes="152x152" href="/apple-touch-icon-152x152.png">
    <link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon-180x180.png">
    <link rel="icon" type="image/png" href="/favicon-192x192.png" sizes="192x192">
    <link rel="icon" type="image/png" href="/favicon-160x160.png" sizes="160x160">
    <link rel="icon" type="image/png" href="/favicon-96x96.png" sizes="96x96">
    <link rel="icon" type="image/png" href="/favicon-16x16.png" sizes="16x16">
    <link rel="icon" type="image/png" href="/favicon-32x32.png" sizes="32x32">
    <meta name="msapplication-TileColor" content="#00e700">
    <meta name="msapplication-TileImage" content="/mstile-144x144.png">

    <!-- ========= 
    Fonts 
    ========= -->
    
    <script type="text/javascript">
    WebFontConfig = { fontdeck: { id: '{{ Config::get('app.fontdeck_id') }}' } };

    (function() {
      var wf = document.createElement('script');
      wf.src = ('https:' == document.location.protocol ? 'https' : 'http') +
      '://ajax.googleapis.com/ajax/libs/webfont/1/webfont.js';
      wf.type = 'text/javascript';
      wf.async = 'true';
      var s = document.getElementsByTagName('script')[0];
      s.parentNode.insertBefore(wf, s);
    })();
    </script>    

    <!-- ========= 
    CSS
    ========= -->
    <link rel="stylesheet" href="css/style.css">
    <!-- Icons css -->  
    <link rel="stylesheet" href="css/icomoon.css">
    <!-- <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet"> -->

    <!-- ========= 
    JS
    ========= -->

    <!--[if lt IE 9]>
        <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->

    <script>
      (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
      (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
      m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
      })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

      ga('create', 'UA-19030232-6', 'auto');
      ga('send', 'pageview');

    </script>

    <script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=true"></script>
   
</head>

<body>

    <div id="fb-root"></div>
    <script>(function(d, s, id) {
      var js, fjs = d.getElementsByTagName(s)[0];
      if (d.getElementById(id)) return;
      js = d.createElement(s); js.id = id;
      js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&appId=1429726730641216&version=v2.0";
      fjs.parentNode.insertBefore(js, fjs);
    }(document, 'script', 'facebook-jssdk'));</script>

    <!-- LOADING START -->  
    <div class="preloader">
        <div class="intro-type1 animated spin">
            <img src="/img/loader.svg" height="140" width="140" alt="preloader">
        </div>    
    </div>
    <!-- LOADING START --> 


    <!-- START OF DIV -->  
    <div class="page" >
            
        <div class="container-border">        
    

            <!-- NAVIGATION -->
            <nav>
                <div class="container">
                    <div class="sixteen columns">
                        <!-- NAVIGATION - Sign up -->   
                        <div class="signup"><a href="http://www.hackathon.io/hackathon-sng" class="button-signup" target="_blank">Zaregistruj sa!</a></div>
                        <!-- NAVIGATION - list -->  
                        <ul id="onepagenav">
                            <li><a href="#homepage"><img src="img/loader.svg" style="max-height: 30px; width: auto;vertical-align: middle; "></a></li>
                            <li><a href="#about">O hackathone</a></li>
                            <li><a href="#projects">Projekty</a></li>
                            <li><a href="#schedule">Program</a></li>
                            <li><a href="#prices">Ceny</a></li>
                            <li><a href="#judges">Porota</a></li>
                            <li><a href="#venue">Praktické informácie</a></li>
                            <li><a href="#partners">Partneri</a></li>
                        </ul>   
                        <!-- NAVIGATION - list -->  
                    </div>
                </div>
            </nav>
            <!-- NAVIGATION -->

            <!-- MODULE : HOMEPAGE -->
            <section id="homepage">
                <img src="/img/loader.svg" class="logo" alt="logo" />
                <div class="container">
                    <div class="sixteen columns">
                        <!-- HOMEPAGE - bigtext -->
                        <div class="home-bigtext">
                            <p class="white">7 - 8/10/2016</p>
                            <h1 class="color">Hackathon SNG</h1>
                            <p class="white">ART &amp; DATA</p>
                        </div>
                        <!-- HOMEPAGE - bigtext -->
                        <!-- HOMEPAGE - widget -->
                        <div id="homepage-widget">
                            <div id="event-widget">
                                <div id="countdown">
                                    <div id="countdown_dashboard">
                                        <div class="dash days_dash">
                                            <span class="dash-title">dní</span>
                                            <div class="digit digit-margin">0</div>
                                            <div class="digit">0</div>
                                        </div>
                            
                                        <div class="dash hours_dash">
                                            <span class="dash-title">hodín</span>
                                            <div class="digit digit-margin">0</div>
                                            <div class="digit">0</div>
                                        </div>
                            
                                        <div class="dash minutes_dash">
                                            <span class="dash-title">minút</span>
                                            <div class="digit digit-margin">0</div>
                                            <div class="digit">0</div>
                                        </div>
                                    </div>
                                </div> 
                            </div>
                        </div>
                        <!-- HOMEPAGE - widget -->
                        <!-- HOMEPAGE - share -->
                        <div class="shareon-container">
                            <div class="fb-like" data-href="http://hackathon.sng.sk/" data-layout="button_count" data-action="like" data-show-faces="false" data-share="false"></div>
                            &nbsp;
                            <a href="https://twitter.com/share" class="twitter-share-button" data-count="true">Tweet</a><script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+'://platform.twitter.com/widgets.js';fjs.parentNode.insertBefore(js,fjs);}}(document, 'script', 'twitter-wjs');</script>
                            <br class="clear">
                            <a href="http://www.hackathon.io/hackathon-sng" class="button-signup" target="_blank">Zaregistruj sa!</a>
                        </div>

                        <!-- HOMEPAGE - share -->
                    </div>
                </div>
            </section>
            <!-- MODULE : HOMEPAGE -->

        <!-- MODULE : ABOUT -->
        <section id="about" class="section-container">
            <div class="container">
               
                <div id="invitation" class="sixteen columns">
                    <h2>We invite you!</h2>
                    <p>Art is no longer confined by the limits of galleries or established formats. Technology can help us breath life into collections, open them up to the public and share art across the world. We invite you to create something innovative using art, code and inspiration in just 24 hours during the Art Data Hackathon.</p>
                    <p>Slovak National Gallery and Nasjonalmuseet Norway will provide data, mentors and media to work with, as well as ample drinks and snacks to support you on your creative journey. Whether you are a web developer, graphic designer, UI/UX specialist, game programmer, filmmaker or sound artist, we will make sure your skills are matched by like-minded creatives.</p>
                    <a href="http://www.hackathon.io/hackathon-sng" class="button-signup" target="_blank">Registrations open until 6.10.2016</a>
                </div>

                <hr class="dividerline"/>

                <div id="resources" class="sixteen columns">
                    <h3>Resources</h3>
                    <ul class="list-square">
                        <li>Nasjonalmuseet - Solr Index As Api</li>
                        <li>Webumenia - Open Elastic Search Api</li>
                        <li>Artist Data
                            <ul>
                                <li>Lexicon Data in RDF (Norwegian Artists)</li>
                                <li><a Href="https://snl.no/">sln.no</a></li>
                                <li><a Href="http://www.getty.edu/research/tools/vocabularies/ulan/">Ulan</a></li>
                                <li>Artist Data From Webumenia - Elastic Search</li>
                            </ul>
                        </li>
                        <li>Audioguide</li>
                        <li>3d Visualisations</li>
                    </ul>
                </div>

                <!-- MODULE : MENTORS -->
                <section id="mentors" class="section-container">
                    <div class="container">
                        <div class="sixteen columns">
                            <h3>Mentors</h3>              
                            <p>During the hackathon teams will be supported by an international selection of experienced mentors</p>
                        </div>

                        <!-- POROTCA  -->
                        <div class="one-fifth column speaker-profile">
                            <div class="speaker-thumb"><img src="img/mentor/mentor.jpg" alt="speaker"/></div> 
                            <div class="speaker-description">
                                <h5>Mentor</h5>
                                <p class="job-position">mentor</p> 
                                <p>Mentor is an awesome mentor</p>
                            </div>
                        </div>
                        <!-- POROTCA  -->

                        <!-- POROTCA  -->
                        <div class="one-fifth column speaker-profile">
                            <div class="speaker-thumb"><img src="img/mentor/amalia-filip.jpg" alt="speaker"/></div> 
                            <div class="speaker-description">
                                <h5>Amalia Filip</h5>
                                <p class="job-position">mentor</p> 
                                <p>Mentor is an awesome mentor</p>
                            </div>
                        </div>
                        <!-- POROTCA  -->

                        <!-- POROTCA  -->
                        <div class="one-fifth column speaker-profile">
                            <div class="speaker-thumb"><img src="img/mentor/matej-fandl.jpg" alt="speaker"/></div> 
                            <div class="speaker-description">
                                <h5>Matej Fandl</h5>
                                <p class="job-position">Creative coder</p> 
                                <p>Matej has a keen interest in artificial intelligence, natural interfaces, multi-agent modeling and computer vision. He uses his technical skills to create captivating online and offline experience at <a href="http://www.mladypes.sk/">Mladý pes</a>.</p>
                            </div>
                        </div>
                        <!-- POROTCA  -->

                        <!-- POROTCA  -->
                        <div class="one-fifth column speaker-profile">
                            <div class="speaker-thumb"><img src="img/mentor/mentor.jpg" alt="speaker"/></div> 
                            <div class="speaker-description">
                                <h5>Norwegian mentor (TBA)</h5>
                                <p class="job-position">mentor</p> 
                                <p>Mentor is an awesome mentor</p>
                            </div>
                        </div>
                        <!-- POROTCA  -->

                        <!-- POROTCA  -->
                        <div class="one-fifth column speaker-profile">
                            <div class="speaker-thumb"><img src="img/mentor/mentor.jpg" alt="speaker"/></div> 
                            <div class="speaker-description">
                                <h5>Nasjonalmuseet</h5>
                                <p class="job-position">mentor</p> 
                                <p>Dag Hensteen, Magnus Bognerud, Gro Pedersen - Nasjonalmuseet API, digital collection</p>
                            </div>
                        </div>
                        <!-- POROTCA  -->

                        <!-- POROTCA  -->
                        <div class="one-fifth column speaker-profile">
                            <div class="speaker-thumb"><img src="img/mentor/kusa.jpg" alt="speaker"/></div> 
                            <div class="speaker-description">
                                <h5>Alexandra Kusá</h5>
                                <p class="job-position">general director SNG</p> 
                                <p>Art historic and Curator</p>
                            </div>
                        </div>
                        <!-- POROTCA  -->

                        <!-- POROTCA  -->
                        <div class="one-fifth column speaker-profile">
                            <div class="speaker-thumb"><img src="img/mentor/mentor.jpg" alt="speaker"/></div> 
                            <div class="speaker-description">
                                <h5>Dušan Buran</h5>
                                <p class="job-position">curator</p> 
                                <p>Dušan is the chief curator at SNG</p>
                            </div>
                        </div>
                        <!-- POROTCA  -->

                        <!-- POROTCA  -->
                        <div class="one-fifth column speaker-profile">
                            <div class="speaker-thumb"><img src="img/mentors/igor-rjabinin.jpg" alt="speaker"/></div> 
                            <div class="speaker-description">
                                <h5>lab.SNG</h5>
                                <p class="job-position">digital R&amp;D</p> 
                                <p>lab.SNG develops <a href="http://www.webumenia.sk/">webumenia.sk</a> as well as other innovative web projects.</p>
                            </div>
                        </div>
                        <!-- POROTCA  -->                

                        <!-- POROTCA  -->
                        <div class="one-fifth column speaker-profile">
                            <div class="speaker-thumb"><img src="img/mentors/philo-van-kemenade.jpg" alt="speaker"/></div> 
                            <div class="speaker-description">
                                <h5>Philo van Kemenade</h5>
                                <p class="job-position">web developer</p> 
                                <p>Philo splits his time between developing web projects at <a href="http://sng.sk/">SNG</a> and running the computational design studio <a href="http://unfold.is">Unfold</a>.</p>
                            </div>
                        </div>
                        <!-- POROTCA  -->                

                        <!-- POROTCA  -->
                        <div class="one-fifth column speaker-profile">
                            <div class="speaker-thumb"><img src="img/mentors/dag-hensten.jpg" alt="speaker"/></div> 
                            <div class="speaker-description">
                                <h5>Dag Hensten</h5>
                                <p class="job-position">senior consultant</p> 
                                <p>Dag is Senior Advisor in digital stuff at <a href="http://www.nasjonalmuseet.no/">Nasjonalmuseet</a></p>
                                <p>He likes his coffee strong and black.</p>
                            </div>
                        </div>
                        <!-- POROTCA  -->
                    </div>
                </section>
                <!-- MODULE : POROTA --> 

                <div class="topic-container one-third column">
                        <div class="topic-icon">
                            <i class="icon-mobile"></i>
                        </div>
                        
                            <span class="topic-title"><em>Nestex aplikácia</em></span>
                            <p>Nestála expozícia SNG svojou atypickou inštaláciou prezentuje umenie gotiky a baroka v novom svetle a kontexte. Spracovanie tejto výstavy napríklad do podoby mobilnej aplikácie je pre nás ďalšou výzvou v snahe popularizovať staré umenie. Vítaná je práca s "oficiálnymi" dátami od nás, rovnako ako pôvodný obsah vytvorený na mieste. </p>
                            <p class="right"><a href="" class="toggle-project-details">zobraziť viac &rarr;</a></p>
                            <div class="project-details">
                                <p><strong>Podklady:</strong> </p>
                                <ul class="list-square">
                                    <li>metadáta o dielach na Nestex-e (prostredníctvom <a href="http://www.webumenia.sk/oai-pmh/?verb=ListRecords&metadataPrefix=oai_dc&set=Nestex">protokolu OAI-PMH</a> alebo ako CSV na stiahnutie)</li>
                                    <li>digitálne reprodukcie vystavených diel  (JPG na stiahnutie)</li>
                                    <li>pdf verzia katalógu a sprievodca výstavou</li>
                                    <li>zdrojový kód k aplikácii Soundwalk</li>
                                </ul>
                                <p><strong>Inšpirácie:</strong> </p>
                                <ul class="list-square">
                                    <li><a href="/downloads/nebo-peklo.pdf">Nebo-peklo - skladačka k nestálej expozícii pre rodiny s ďetmi od 6. rokov</a> - zábavné úlohy, v ktorých sa dozviete viac o sochách alebo o perspektíve</li>
                                    <li><a href="http://soundwalk.sng.sk/" target="_blank">Soundwalk Strážky</a> - aplikácia/audiosprievodca SNG pre kaštieľ Strážky (field recordings + audio príbehy) </li>
                                    <li><a href="http://news.museumhack.com/post/96090530768/audio-tours-for-the-met-the-unauthorized-alternative" target="_blank">Audio Tours for the Met: The Unauthorized Alternative</a> - podcasty kritika umenia o 11 maľbách v Metropolitnom múzeu ako alternatíva k nudným oficiálnym sprievodcom</li>
                                    <li><a href="http://audiotourhack.com/unadulterated" target="_blank">MoMA Unadulterated</a> - neoficiálny audiosprievodca vytvorený detmi pre diela v Múzeu moderného umenia v New York</li>
                                </ul>
                            </div>
                        
                    </div>
                    
                    <div class="topic-container one-third column">
                        <div class="topic-icon">
                            <i class="icon-globe"></i>
                        </div>
                        <span class="topic-title"><em>Web umenia</em></span>
                        <p>
                        Jedným z cieľov <a href="http://www.webumenia.sk" target="_blank">Webu umenia</a> je prehľadne a pútavo sprístupniť veľké množstvo obrázkov a dát o dielach zo zbierok slovenských galérií. Momentálne pracujeme na jeho novej podobe, ktorej prototyp môžete vidieť na stránke k výstave <a href="http://dvekrajiny.sng.sk">Dve krajiny</a>. Nové funkcie ako napr. vizualizácia dát pre nás budú inšpiráciou pri rozhodovaní v tom, akým smerom sa uberať ďalej. </p>
                        <p class="right"><a href="" class="toggle-project-details">zobraziť viac &rarr;</a></p>
                        <div class="project-details">
                            <p><strong>Podklady:</strong> </p>
                            <ul class="list-square">
                                <li>metadáta o všetkých dielach SNG - Public Domain (CSV na stiahnutie)</li>
                                <li><a href="http://www.webumenia.sk/oai-pmh/?verb=ListRecords&metadataPrefix=oai_dc&set=Europeana%20SNG" target="_blank">metadáta a reprodukcie voľne prístupných diel SNG</a> - Public Domain (JPG na stiahnutie, alebo JP2 cez Image server) </li>
                                <li>kolekcia <a href="http://www.webumenia.sk/web/guest/search/-/results?orderBy=RELEVANCE&page=1&items=28&query=jedlo&layout=gridLayout&images=true&searchFor=tags" target="_blank">Food and drink</a> (diela vyobrazujúce jedlo) - Public Domain (CSV, alebo <a href="http://www.webumenia.sk/oai-pmh/?verb=ListRecords&metadataPrefix=oai_dc&set=Food_and_Drink">XML prostredníctvom protokolu OAI-PMH</a>)</li>
                                <li>zdrojový kód nového Webu umenia (Github)</li>
                                <li>dáta o publikáciách SNG z knižničného systému (CSV, alebo <a href="/downloads/kniznica-sng-pristup.pdf">prostrednítvom protokolu Z39.50</a>)</li>
                            </ul>
                            <p><strong>Inšpirácie:</strong> </p>
                            <ul class="list-square">
                                <li><a href="https://collection.cooperhewitt.org/objects/colors/" target="_blank">Cooper Hewitt Colors!</a> - vyhľadávanie v zbierkach amerického múzea dizajnu podľa farieb (<a href="http://labs.cooperhewitt.org/2014/a-colophon-for-bias/" target="_blank">blog o technickom riešení</a>)</li>
                                <li><a href="http://labs.cooperhewitt.org/2013/default-sort-or-what-would-shannon-do/" target="_blank">Triedenie diel podľa komplexnosti obrázku / Shannonovej Entropie</a></li>
                            </ul>
                            <!-- Práve prebieha redizajn webumenia.sk od nuly. Práve v tejto fáze je najlepší čas pridať funkcie a nástroje - o ktorých si myslíte, že by sa mohli hodiť. -->
                        </div>
                    </div>
                    
                    <div class="topic-container one-third column">
                        <div class="topic-icon">
                            <i class="icon-picture"></i>
                        </div>
                        <span class="topic-title"><em>Spracovanie obrazu</em></span>
                        <p>Vizuálne orientovaní účastníci môžu experimentovať s digitálnymi reprodukciami výtvarných diel, ktoré vznikajú v rámci projektu <a href="http://www.digitalnagaleria.sk/" target="_blank">Digitálna galéria</a>. Môžu napríklad skúmať súvislosti na základe farebnosti a štýlu diel autorov ako <a href="http://www.webumenia.sk/web/guest/search/-/simpleSearch/query=%22%C4%BDudov%C3%ADt+Fulla%22&autocomplete=true" target="_blank">Ľudovít Fulla</a> (<a href="http://www.webumenia.sk/oai-pmh/?verb=ListRecords&metadataPrefix=oai_dc&set=Fulla_SNG" target="_blank">OAI-PMH set</a>) a <a href="http://www.webumenia.sk/web/guest/search/-/simpleSearch/query=%22Mikul%C3%A1%C5%A1+Galanda%22&autocomplete=true" target="_blank">Mikuláš Galanda</a> (<a href="http://www.webumenia.sk/oai-pmh/?verb=ListRecords&metadataPrefix=oai_dc&set=Galanda_SNG" target="_blank">OAI-PMH set</a>), alebo môžu ich zdigitalizované diela použiť ako zdrojový materiál pre VJing.</p>
                        <p class="right"><a href="" class="toggle-project-details">zobraziť viac &rarr;</a></p>
                        <div class="project-details">
                            <p><strong>Podklady:</strong> </p>
                            <ul class="list-square">
                                    <li>voľne prístupné diela SNG vo vysokom rozlíšení</li>
                                    <li>náhľady zdigitalizovaných diel slovensých zbierkotvorných galérií</li>
                            </ul>
                            <p><strong>Návrhy:</strong> </p>
                            <ul class="list-square">
                                <li>vývoj farebnosti v dielach maliara Galandu porovnávaním histogramu jednotlivých obrázkov</li>
                                <li>Fularizér - aplikácia pre pretvorenie fotky do Fullového obrazu</li>
                            </ul>
                            <p><strong>Inšpirácie:</strong> </p>
                            <ul class="list-square">
                                <li><a href="http://www.tate.org.uk/context-comment/apps/muybridgizer" target="_blank">Muybridgizer</a> - aplikácia, ktorá nasnímané video pretvorí s efektom prvých filmových experimentov</li>
                                <li><a href="https://medium.com/the-physics-arxiv-blog/when-a-machine-learning-algorithm-studied-fine-art-paintings-it-saw-things-art-historians-had-never-b8e4e7bf7d3e" target="_blank">When A Machine Learning Algorithm Studied Fine Art Paintings, It Saw Things Art Historians Had Never Noticed</a> - algoritmus ktorý pomocou spracovania obrazu a automatickej klasifikácie triedi výtvarné diela podľa vizuálnych konceptov</li>
                            </ul>
                        </div>
                    </div>

                <div class="clear"></div>

            </div>
        </section>
        <!-- MODULE : ABOUT --> 

        <!-- MODULE : PROGRAM -->
        <section id="schedule" class="section-container">
            <div class="container">
               
                <div class="sixteen columns">
                    <h5>Program</h5>              
                </div>

                <!-- schedule list -->
                <div class="sixteen columns schedule-list odd">
                    <div class="day">
                        <div>
                            <h6>Piatok</h6>
                        </div>
                    </div>
                
                    <div class="time">
                        <div>
                            <h6>17.00</h6>
                            <p>(40 min)</p>
                        </div>
                    </div>
                
                    <div class="details">
                        <div>
                            <h6>otvorenie Hackathonu (Alexandra Kusá)</h6>
                            <p>organizačné pokyny (Michal Čudrnák a Igor Rjabinin)<br/> predstavenie projektu Europeana Food and Drink </p>
                        </div>
                    </div>
                </div>
                <!-- schedule list -->

                <!-- schedule list -->
                <div class="sixteen columns schedule-list even">
                    <div class="day">
                        <div>
                            <h6></h6>
                        </div>
                    </div>
                
                    <div class="time">
                        <div>
                            <h6>17.40</h6>
                            <p>(40 min)</p>
                        </div>
                    </div>
                
                    <div class="details">
                        <div>
                            <h6>komentovaná prehliadka Nestálej expozície SNG</h6>
                            <p>s kurátorkou Katarínou Chmelinovou (1. poschodie Esterházyho paláca) </p>
                        </div>
                    </div>
                </div>
                <!-- schedule list -->

                <!-- schedule list -->
                <div class="sixteen columns schedule-list odd">
                    <div class="day">
                        <div>
                            <h6></h6>
                        </div>
                    </div>
                
                    <div class="time">
                        <div>
                            <h6>18.20</h6>
                            <p>&nbsp;</p>
                        </div>
                    </div>
                
                    <div class="details">
                        <div>
                            <h6>prezentácia projektu Soft Revolvers</h6>
                            <p><a href="http://myriambleau.com/" target="_blank">Myriam Bleau</a>  (v spolupráci s <a href="http://www.nextfestival.sk/" target="_blank">festivalom NEXT</a>) </p>
                        </div>
                    </div>
                </div>
                <!-- schedule list -->

                <!-- schedule list -->
                <div class="sixteen columns schedule-list even">
                    <div class="day">
                        <div>
                            <h6></h6>
                        </div>
                    </div>
                
                    <div class="time">
                        <div>
                            <!-- <h6>-</h6> -->
                            <p>v priebehu večera</p>
                        </div>
                    </div>
                
                    <div class="details">
                        <div>
                            <h6>laser show Kvant</h6>
                            <p></p>
                        </div>
                    </div>
                </div>
                <!-- schedule list -->

                <!-- schedule list -->
                <div class="sixteen columns schedule-list odd">
                    <div class="day">
                        <div>
                            <h6>Sobota</h6>
                        </div>
                    </div>
                
                    <div class="time">
                        <div>
                            <h6>17.00</h6>
                            <p></p>
                        </div>
                    </div>
                
                    <div class="details">
                        <div>
                            <h6>prezentácia a hodnotenie projektov<br> vyhlásenie výsledkov</h6>
                            <p></p>
                        </div>
                    </div>
                </div>
                <!-- schedule list -->

                <!-- schedule list -->
                <div class="sixteen columns schedule-list even">
                    <div class="day">
                        <div>
                            <h6></h6>
                        </div>
                    </div>
                
                    <div class="time">
                        <div>
                            <h6>18.30</h6>
                            <p></p>
                        </div>
                    </div>
                
                    <div class="details">
                        <div>
                            <h6><a href="http://k-o-l-e-k-t-i-v.github.io/" target="_blank">Kolektiv</a></h6>
                            <p>live coding audio/video performance  (v spolupráci s <a href="http://www.nextfestival.sk" target="_blank">festivalom NEXT</a>)</p>
                        </div>
                    </div>
                </div>
                <!-- schedule list -->

            </div>
        </section>
        <!-- MODULE : PROGRAM --> 
                
        <!-- MODULE : CENY -->
        <section id="prices" class="section-container">
            <div class="container text-center">
               <img src="/img/ceny.svg" alt="ceny pre 3 najlepšie projekty">
            </div>
        </section>
        <div id="statisticsection">
            <div class="container">
                <div class="one-third column statistic">
                    <div class="statistic-icon"><i class="icon-wallet"></i></div>
                    <div class="statistic-desc">
                    <h3>500 EUR</h3>
                    <p>finančná odmena</p>
                    </div>
                </div>
                <div class="one-third column statistic">
                    <div class="statistic-icon"><i class="icon-notebook"></i></div>
                    <div class="statistic-desc">
                    <h3>knihy &amp; reprodukcie</h3>
                    <p>zo SNG</p>
                    </div>
                </div>
                <div class="one-third column statistic">
                    <div class="statistic-icon"><i class="icon-pricetags"></i></div>
                    <div class="statistic-desc">
                    <h3>lístky na koncert</h3>
                    <p>Midi Lidi &amp; Čoko Voko</p>
                    </div>
                </div>
                
            </div>
        </div>
        <!-- MODULE : CENY --> 

        
                
        <!-- MODULE : PRAKTICKE INFORMACIE -->
        <section id="venue" class="section-container">
            <div class="map-container">
                <div id="map"></div>
            </div>
            <div class="container">
               
                <div class="sixteen columns">
                    <h5>Praktické informácie</h5>              
                    <ul class="list-square">
                        <li>Zdrojové kódy a dáta budú k dispozícii na <a href="https://github.com/SlovakNationalGallery" target="_blank">github.com/SlovakNationalGallery</a></li>
                        <li>Svoje projekty budete môcť priebežne konzultovať s tímom lab.SNG</li>
                        <li>Počas trvania Hackathonu bude zabezpečené občerstvenie a nápoje (piatok 21:00 večera, sobota od 7:00  raňajky, 13.00 obed)</li>
                        <li>V Berlinke bude možné z piatka na sobotu aj prenocovať, potrebujete spacák a karimatku</li>
                        <li>Akékoľvek otázky môžete adresovať priamo na <a href="mailto:lab@sng.sk">lab@sng.sk</a></li>
                    </ul>
                </div>       

            </div>
        </section>
        <!-- MODULE : PRAKTICKE INFORMACIE --> 

        <!-- MODULE : TOP SPONSOR -->
        <div class="topsponsor-section" id="partners">
            <div class="container">
                <div class="sixteen columns">
                    <h5>Sponzori</h5>                
                </div>
                <div class="four columns topsponsor-single-withtext">
                    <a href="http://foodanddrinkeurope.eu/" target="_blank" class="noborder"><img src="img/partneri/europeana.png" alt="logo"/></a>
                </div>
                <div class="four columns topsponsor-single-withtext">
                    <a href="https://www.nethemba.com/" target="_blank" class="noborder"><img src="img/partneri/nethemba.png" alt="logo"/></a>
                </div>
                <div class="four columns topsponsor-single-withtext">
                    <a href="http://www.opis.gov.sk/" target="_blank" class="noborder"><img src="img/partneri/opis.png" alt="logo"/></a>
                </div>
                <div class="four columns topsponsor-single-withtext">
                    <a href="http://www.kvant.sk/" target="_blank" class="noborder"><img src="img/partneri/kvant.png" alt="logo"/></a>
                </div>
                <div class="clear" style="clear: both"></div>
                <div class="sixteen columns">
                    <h5>Sprievodný program v parterstve s <a href="http://www.nextfestival.sk">festivalom NEXT</a></h5>       
                    <p>&nbsp;</p>         
                </div>
            </div>
        </div>
        <!-- MODULE : TOP SPONSOR -->

        <!-- MODULE : FOOTER -->
        <footer>
             <div class="container">
                <div class="sixteen columns copyright text-center">
                    <p class=""> 
                        <a href="http://lab.sng.sk" target="_blank" class="external">lab.SNG</a>
                    </p>
                </div>
            </div>
        </footer>
        <!-- MODULE : FOOTER -->

        </div>  <!-- END OF CONTAINER -->
    </div>    
    <!-- END OF DIV PAGE -->    

    <!-- ========= 
    JS
    ========= -->

    <!-- Retina Display -->
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script> 
    <script src="js/retina.js"></script>

    <!-- magnific-popup  -->
    <script src="js/jquery.magnific-popup.min.js"></script>

    <!-- Pre-Loader -->
    <script type="text/javascript">
        $(window).load(function() {
            $('body').css('overflow', 'auto');
            $('.preloader').delay(1000).fadeOut('slow');
        });
    </script>

    <!-- countdown -->
    <script type="text/javascript" src="js/jquery.lwtCountdown-1.0.js"></script>
    <script type="text/javascript">
            jQuery(document).ready(function() {
                $('#countdown_dashboard').countDown({
                    targetDate: {
                        'day':      7,
                        'month':    10,
                        'year':     2016,
                        'hour':     17,
                        'min':      0,
                        'sec':      0
                    }
                });
            });
    </script>

    <!-- One page Nav -->
    <script src="js/jquery.scrollTo.js"></script>
    <script src="js/jquery.nav.js"></script>
    <script>
    $(document).ready(function() {
        $('#onepagenav').onePageNav({
        changeHash: false,
        filter: ':not(.external)',
        scrollOffset: 16,
        });
    });

    $(window).scroll(function(){
        if ($(this).scrollTop() > 650) {
            $('nav').slideDown();
            
        } else {
            $('nav').slideUp();
            
        }
    });     
    </script>   

    <script type="text/javascript" src="js/custom.js"></script>     

    <!-- googlemaps -->
    <script type="text/javascript" src="js/gmaps.js"></script>
    <script type="text/javascript">
            var map;
    
            $(window).load(function() {
               
              map = new GMaps({
                div: '#map',
                lat: 48.140289,
                lng: 17.109519,
                zoom: 16, 
                scrollwheel: false
              });

              map.drawOverlay({
                lat: map.getCenter().lat(),
                lng: map.getCenter().lng(),
                content: '<div class="overlay-map"><div class="overlay-map-header">Berlinka</div><p>Esterházyho palác, Nám. Ľ. Štúra 4 <br/>Bratislava</p><div class="overlay-map-arrow above"></div></div>',
                verticalAlign: 'top',
                horizontalAlign: 'center'
              });
            });
        </script>   


</body>
</html>