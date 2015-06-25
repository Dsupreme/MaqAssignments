@extends('master')

    @section('head_css')
        <link rel="stylesheet" type="text/css" href="{{ asset('css/welcome.css') }}" />
    @endsection

    @section('head_js')
        <script type="text/javascript" src="{{ asset('js/welcome.js') }}"></script>
    @endsection

    @section('logo')
        <div class="quote right hide-on-med-and-down">{{ Inspiring::quote() }}</div>
        <img src="{{ asset('image/grammy.png') }}"class="logo">
    @endsection

    @section('nav-content')
        <ul id="nav-mobile" class="right hide-on-med-and-down">
            <li><a href="#about">About</a></li>
            <li><a href="#venue">Venues</a></li>
            <li><a href="#gallery">Gallery</a></li>
            <li><a href="#nominees">Nominees</a></li>
        </ul>
        <ul  class="hide-on-large-only hide-on-small-only right">
            <li>
                <div class="quote-in-bar">{{ Inspiring::quote() }}</div>
            </li>
        </ul>

    @endsection

@section('content')
            <main>
                <div class="parallax-container" style="position: relative;top:-1.5em">
                    <div class="parallax"><img src="{{ asset('image/parallax1.jpg') }}" width="100%"></div>
                </div>
                <div class="section white" id="about" style="position:relative;top: -1.5em">
                    <div class="row container">
                        <h2 class="header">Grammy Award</h2>
                        <p class="grey-text text-darken-3 lighten-3 wide-lines">
                            Originally called Gramophone Award, is an accolade by the National Academy of Recording Arts and Sciences (NARAS) of the United States to recognize outstanding achievement in the music industry.<br/><br/>
                            The annual presentation ceremony features performances by prominent artists, and the presentation of those awards that have a more popular interest. It shares recognition of the music industry as that of the other performance arts: Emmy Awards (television), the Tony Awards (stage performance), and the Academy Awards (motion pictures).<br/><br/>
                            The gold-plated trophies, each depicting a gilded gramophone, are made and assembled by hand by Billings Artworks in Ridgway, Colorado.
                        </p>
                    </div>
                </div>
                <div class="parallax-container" style="position:relative;top: -1.5em">
                    <div class="parallax"><img src="{{ asset('image/parallax2.jpg') }}"></div>
                </div>
                <div class="section white" id="venue" style="position:relative;top: -1.5em" >
                    <div class="row container">
                        <h2 class="header">Venues</h2>
                        {{--<p class="grey-text text-darken-3 lighten-3">--}}
                        <div class="row">
                            <div class="col s12 m6 l6">
                                <div class="card">
                                    <div class="card-image waves-effect waves-block waves-light">
                                        <img class="activator" src="{{ asset('image/timeline1.jpg') }}">
                                    </div>
                                    <div class="card-content">
                                        <span class="card-title activator grey-text text-darken-4">
                                            Staples Center
                                            <i class="mdi-navigation-more-vert right"></i>
                                        </span>
                                    </div>
                                    <div class="card-reveal">
                                        <span class="card-title grey-text text-darken-4">
                                            Staples Center
                                            <i class="mdi-navigation-close right"></i>
                                        </span>
                                        <p>
                                            <ul>
                                                <li>57th Annual Grammy Awards
                                                    <a class="right">February 8, 2015</a>
                                                </li>
                                                <li>56th Annual Grammy Awards
                                                    <a class="right">January 26, 2014</a>
                                                </li>
                                                <li>55th Annual Grammy Awards
                                                    <a class="right">February 10, 2013</a>
                                                </li>
                                                <li>54th Annual Grammy Awards
                                                    <a class="right">February 12, 2012</a>
                                                </li>
                                                <li>53rd Annual Grammy Awards
                                                    <a class="right">February 13, 2011</a>
                                                </li>
                                                <li>52nd Annual Grammy Awards
                                                    <a class="right">January 31, 2010</a>
                                                </li>
                                                <li>51st Annual Grammy Awards
                                                    <a class="right">February 8, 2009</a>
                                                </li>
                                                <li>50th Annual Grammy Awards
                                                    <a class="right">February 10, 2008</a>
                                                </li>
                                                <li>49th Annual Grammy Awards
                                                    <a class="right">February 11, 2007</a>
                                                </li>
                                                <li>48th Annual Grammy Awards
                                                    <a class="right">February 8, 2006</a>
                                                </li>
                                                <li>47th Annual Grammy Awards
                                                    <a class="right">February 13, 2005</a>
                                                </li>
                                                <li>46th Annual Grammy Awards
                                                    <a class="right">February 8, 2004</a>
                                                </li>
                                            </ul>
                                        </p>
                                    </div>
                                 </div>
                            </div>
                            <div class="col s12 m6 l6">
                                <div class="card ">
                                    <div class="card-image waves-effect waves-block waves-light">
                                        <img class="activator" src="{{ asset('image/timeline2.jpg') }}">
                                    </div>
                                    <div class="card-content">
                                        <span class="card-title activator grey-text text-darken-4">
                                            Madison Square Garden
                                            <i class="mdi-navigation-more-vert right"></i>
                                        </span>
                                    </div>
                                    <div class="card-reveal">
                                        <span class="card-title grey-text text-darken-4">
                                            Madison Square Garden
                                            <i class="mdi-navigation-close right"></i>
                                        </span>
                                        <p>
                                            <ul>
                                                <li>45th Annual Grammy Awards                                                                                   <a class="right">February 23, 2003</a>
                                                </li>
                                                <li>39th Annual Grammy Awards
                                                    <a class="right">February 26, 1997</a>
                                                </li>
                                            </ul>
                                        </p>
                                    </div>
                                 </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col s12 m6 l6">
                                <div class="card ">
                                    <div class="card-image waves-effect waves-block waves-light">
                                        <img class="activator" src="{{ asset('image/timeline3.jpg') }}">
                                    </div>
                                    <div class="card-content">
                                        <span class="card-title activator grey-text text-darken-4">
                                            Shrine Auditorium
                                            <i class="mdi-navigation-more-vert right"></i>
                                        </span>
                                    </div>
                                    <div class="card-reveal">
                                        <span class="card-title grey-text text-darken-4">
                                            Shrine Auditorium
                                            <i class="mdi-navigation-close right"></i>
                                        </span>
                                        <p>
                                            <ul>
                                                <li>41st Annual Grammy Awards
                                                    <a class="right">February 24, 1999</a>
                                                </li>
                                                <li>38th Annual Grammy Awards
                                                    <a class="right">February 28, 1996</a>
                                                </li>
                                                <li>37th Annual Grammy Awards
                                                    <a class="right">March 1, 1995</a>
                                                </li>
                                                <li>35th Annual Grammy Awards
                                                    <a class="right">February 24, 1993</a>
                                                </li>
                                                <li> 32nd Annual Grammy Awards
                                                    <a class="right">February 21, 1990</a>
                                                </li>
                                                <li>29th Annual Grammy Awards
                                                    <a class="right">February 24, 1987</a>
                                                </li>
                                                <li>28th Annual Grammy Awards
                                                    <a class="right">February 25, 1986</a>
                                                </li>
                                                <li>27th Annual Grammy Awards
                                                    <a class="right">February 26, 1985</a>
                                                </li>
                                                <li>26th Annual Grammy Awards
                                                    <a class="right">February 28, 1984</a>
                                                </li>
                                                <li>25th Annual Grammy Awards
                                                    <a class="right">February 23, 1983</a>
                                                </li>
                                                <li>24th Annual Grammy Awards
                                                    <a class="right">February 24, 1982</a>
                                                </li>
                                                <li>22nd Annual Grammy Awards
                                                   <a class="right">February 27, 1980</a>
                                                </li>
                                                <li>21st Annual Grammy Awards
                                                    <a class="right">February 15, 1979</a>
                                                </li>
                                                <li>20th Annual Grammy Awards
                                                    <a class="right">February 23, 1978</a>
                                                </li>
                                            </ul>
                                        </p>
                                    </div>
                                 </div>
                            </div>
                            <div class="col s12 m6 l6">
                                <div class="card ">
                                    <div class="card-image waves-effect waves-block waves-light">
                                        <img class="activator" src="{{ asset('image/timeline4.jpg') }}">
                                    </div>
                                    <div class="card-content">
                                        <span class="card-title activator grey-text text-darken-4">
                                            Radio City Music Hall
                                            <i class="mdi-navigation-more-vert right"></i>
                                        </span>
                                    </div>
                                <div class="card-reveal">
                                    <span class="card-title grey-text text-darken-4">
                                        Radio City Music Hall
                                        <i class="mdi-navigation-close right"></i>
                                    </span>
                                    <p>
                                        <ul>
                                            <li>40th Annual Grammy Awards
                                                <a class="right">February 25, 1998</a>
                                            </li>
                                            <li>36th Annual Grammy Awards
                                                <a class="right">March 1, 1994</a>
                                            </li>
                                            <li>34th Annual Grammy Awards
                                                <a class="right">February 25, 1992</a>
                                            </li>
                                            <li>33rd Annual Grammy Awards
                                                <a class="right">February 20, 1991</a>
                                            </li>
                                            <li>30th Annual Grammy Awards
                                                <a class="right">March 2, 1988</a>
                                            </li>
                                            <li>23rd Annual Grammy Awards
                                                <a class="right">February 25, 1981</a>
                                            </li>
                                        </ul>
                                    </p>
                                </div>
                             </div>
                        </div>
                        </div>
                    </div>
                    <div class="row container" id="gallery" >
                        <h2 class="header">Gallery (2015)</h2>
                    </div>
                </div>
                <div class="parallax-container" style="position:relative;top: -1.5em">
                    <div class="row">
                            <div class="slider-nav">
                                <a class="arrow-prev left">
                                    <i class="large mdi-hardware-keyboard-arrow-left"></i>
                                </a>
                                <a class="arrow-next right large">
                                    <i class="large mdi-hardware-keyboard-arrow-right"></i>
                                </a>
                            </div>
                            <div class="slider">
                                <div class="slide active-slide">
                                    <img src="{{asset('image/sliderImg1.jpg') }}" class="slide-img" />
                                </div>
                                <div class="slide">
                                    <img src="{{asset('image/sliderImg2.jpg') }}" class="slide-img" />
                                </div>
                                <div class="slide">
                                    <img src="{{asset('image/sliderImg3.jpg') }}" class="slide-img" />
                                </div>
                                <div class="slide">
                                    <img src="{{asset('image/sliderImg4.jpg') }}" class="slide-img" />
                                </div>
                            </div>
                    </div>
                </div>
                <div class="section white" id="nominees" style="position:relative;top: -1.5em">
                <div class="row container">
                    <h2 class="header">Nominees & Winners of</h2>
                    <h2 class="header right" style="margin-top: -1em">Grammy(2015)</h2>
                    <p class="grey-text text-darken-3 lighten-3">
                    <div class="row " id="nom" style="clear: both;margin-top: 2em">
                        <div class="col s12 m12 l4">
                            <div class="card blue-grey z-depth-2">
                                <div class="card-content white-text nominee">
                                    <h4 class="card-title center">SONG OF THE YEAR</h4>
                                    <p>Stay With Me (Darkchild Version)<br/><br/>
                                    James Napier, William Phillips & Sam Smith<br/><br/>
                                    Label: Capitol Records</p>
                                </div>
                                <div class="card-action">
                                    <!-- Modal Trigger -->
                                    <a href="#modal1" class="modal-trigger">View All Nominees</a>
                                    <!-- Modal Structure -->
                                    <div id="modal1" class="modal modal-fixed-footer">
                                        <div class="modal-content">
                                            <h4>Song of the year</h4>
                                            <ol>
                                                <li>
                                                    Stay With Me (Darkchild Version)<br/>
                                                    Sam Smith<br/>
                                                    Sam Smith, artist. Steve Fitzmaurice, Rodney Jerkins & Jimmy Napes, producers. Matthew Champlin, Steve Fitzmaurice, Jimmy Napes & Steve Price, engineers/mixers. Tom Coyne, mastering engineer.<br/>
                                                    Label: Capitol Records
                                                </li>
                                                <li>
                                                    Fancy<br/>
                                                    Iggy Azalea Featuring Charli XCX<br/>
                                                    The Arcade & The Invisible Men, producers; John Armstrong, Anthony Kilhoffer & Eric Weaver, engineers/mixers; Miles Showell, mastering engineer<br/>
                                                    Track from: The New Classic<br/>
                                                    Label: Def Jam Recordings
                                                </li>
                                                <li>
                                                     Chandelier<br/>
                                                     Sia<br/>
                                                     Greg Kurstin & Jesse Shatkin, producers; Greg Kurstin, Manny Marroquin & Jesse Shatkin, engineers/mixers; Emily Lazar, mastering engineer<br/>
                                                     Track from: 1000 Forms Of Fear<br/>
                                                     Label: RCA Records / Monkey Puzzle Records
                                                </li>
                                                <li>
                                                    Shake It Off<br/>
                                                    Taylor Swift<br/>
                                                    Max Martin & Shellback, producers; Serban Ghenea, John Hanes, Sam Holland & Michael Ilbert, engineers/mixers; Tom Coyne, mastering engineer<br/>
                                                    Label: Big Machine Records
                                                </li>
                                                <li>
                                                     All About That Bass<br/>
                                                     Meghan Trainor<br/>
                                                     Kevin Kadish, producer; Kevin Kadish, engineer/mixer; Dave Kutch, mastering engineer<br/>
                                                     Label: Epic Records
                                                </li>
                                            </ol>
                                        </div>
                                        <div class="modal-footer">
                                            <a href="#!" class=" modal-action modal-close waves-effect waves-green btn-flat">Close</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col s12 m12 l4">
                            <div class="card blue-grey z-depth-2">
                                <div class="card-content white-text nominee">
                                    <h4 class="card-title center">BEST NEW ARTIST</h4>
                                    <p>Sam Smith<br/><br/>                                                                                        Label: Capitol Records</p>
                                </div>
                                <div class="card-action">
                                    <!-- Modal Trigger -->
                                    <a href="#modal2" class="modal-trigger">View All Nominees</a>
                                    <!-- Modal Structure -->
                                    <div id="modal2" class="modal modal-fixed-footer">
                                        <div class="modal-content">
                                            <h4>Best New Artist</h4>
                                            <ol>
                                                <li>Sam Smith<br/>
                                                    Sam Smith, artist.<br/>
                                                    Label: Capitol Records
                                                </li>
                                                <li>Iggy Azalea<br/>
                                                    Label: Def Jam Recordings
                                                </li>
                                                <li>Bastille<br/>
                                                    Label: Virgin Records
                                                </li>
                                                <li>Brandy Clark<br/>
                                                    Label: Slate Creek Records
                                                </li>
                                                <li>Haim<br/>
                                                    Label: Columbia Records
                                                </li>
                                            </ol>
                                        </div>
                                        <div class="modal-footer">
                                            <a href="#!" class=" modal-action modal-close waves-effect waves-green btn-flat">Close</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col s12 m12 l4">
                            <div class="card blue-grey z-depth-2">
                                <div class="card-content white-text nominee">
                                    <h4 class="card-title center">BEST POP SOLO PERFORMANCE</h4>
                                    <p>Happy (Live)<br/><br/>
                                    Pharrell Williams<br/><br/>
                                       Label: Columbia Records</p>
                                </div>
                                <div class="card-action">
                                    <!-- Modal Trigger -->
                                    <a href="#modal3" class="modal-trigger">View All Nominees</a>
                                    <!-- Modal Structure -->
                                    <div id="modal3" class="modal modal-fixed-footer">
                                        <div class="modal-content">
                                            <h4>Best Pop Solo Performance</h4>
                                            <ol>
                                              <li>
                                                  Happy (Live)<br/>
                                                  Pharrell Williams<br/>
                                                  Pharrell Williams, artist.<br/>
                                                  Label: Columbia Records
                                              </li>
                                              <li>
                                                  All Of Me (Live)<br/>
                                                  John Legend<br/>
                                                  Label: Columbia Records
                                              </li>
                                              <li>
                                                  Chandelier<br/>
                                                  Sia<br/>
                                                  Track from: 1000 Forms Of Fear<br/>
                                                  Label: RCA Records / Monkey Puzzle Records
                                              </li>
                                              <li>
                                                  Stay With Me (Darkchild Version)<br/>
                                                  Sam Smith<br/>
                                                  Label: Capitol Records
                                              </li>
                                              <li>
                                                  Shake It Off<br/>
                                                  Taylor Swift<br/>
                                                  Label: Big Machine Records
                                               </li>
                                          </ol>
                                        </div>
                                        <div class="modal-footer">
                                            <a href="#!" class=" modal-action modal-close waves-effect waves-green btn-flat">Close</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col s12 m12 l4">
                            <div class="card blue-grey z-depth-2">
                                <div class="card-content white-text nominee">
                                    <h4 class="card-title center">BEST POP GROUP PERFORMANCE</h4>
                                    <p>Say Something<br/>
                                       A Great Big World (Ian Axel & Chad Vaccarino) & Christina Aguilera.<br/><br/>
                                       Label: Epic Records</p>
                                </div>
                                <div class="card-action">
                                    <!-- Modal Trigger -->
                                    <a href="#modal4" class="modal-trigger">View All Nominees</a>
                                    <!-- Modal Structure -->
                                    <div id="modal4" class="modal modal-fixed-footer">
                                        <div class="modal-content">
                                            <h4>Best Pop Group Performance</h4>
                                            <ol>
                                                <li>
                                                    Say Something<br/>
                                                    A Great Big World (Ian Axel & Chad Vaccarino) & Christina Aguilera, artists.<br/>
                                                    Track from: Is There Anybody Out There?<br/>
                                                    Label: Epic Records
                                                </li>
                                                <li>
                                                    Fancy<br/>
                                                    Iggy Azalea Featuring Charli XCX<br/>
                                                    Track from: The New Classic<br/>
                                                    Label: Def Jam Recordings
                                                </li>
                                                <li>
                                                    A Sky Full Of Stars<br/>
                                                    Coldplay<br/>
                                                    Track from: Ghost Stories<br/>
                                                    Label: Atlantic/Parlophone
                                                </li>
                                                <li>
                                                    Bang Bang<br/>
                                                    Jessie J, Ariana Grande & Nicki Minaj<br/>
                                                    Label: Republic Records
                                                </li>
                                                <li>
                                                    Dark Horse<br/>
                                                    Katy Perry Featuring Juicy J<br/>
                                                    Label: Capitol Records
                                                </li>
                                            </ol>
                                        </div>
                                        <div class="modal-footer">
                                            <a href="#!" class=" modal-action modal-close waves-effect waves-green btn-flat">Close</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col s12 m12 l4">
                            <div class="card blue-grey z-depth-2">
                                <div class="card-content white-text nominee">
                                    <h4 class="card-title center"> BEST TRADITIONAL POP VOCAL ALBUM
                                                                  </h4>
                                    <p>Cheek To Cheek<br/>
                                       Tony Bennett & Lady Gaga<br/><br/>
                                       Label: Streamline / Columbia / RPM / Interscope</p>
                                </div>
                                <div class="card-action">
                                    <!-- Modal Trigger -->
                                    <a href="#modal5" class="modal-trigger">View All Nominees</a>
                                    <!-- Modal Structure -->
                                    <div id="modal5" class="modal modal-fixed-footer">
                                        <div class="modal-content">
                                            <h4>Best Traditional Pop Vocal Album</h4>                                  Cheek To Cheek
                                            <ol>
                                                <li>
                                                    Tony Bennett & Lady Gaga<br/>
                                                    Tony Bennett & Lady Gaga, artists. Dae Bennett, producer. Dae Bennett, engineer/mixer.<br/>
                                                    Label: Streamline/Columbia/RPM/Interscope
                                                </li>
                                                <li>
                                                    Nostalgia<br/>
                                                    Annie Lennox<br/>
                                                    Label: Blue Note Records
                                                </li>
                                                <li>
                                                    Night Songs<br/>
                                                    Barry Manilow<br/>
                                                    Label: Stiletto Entertainment
                                                </li>
                                                <li>
                                                    Sending You A Little Christmas<br/>
                                                    Johnny Mathis<br/>
                                                    Label: Columbia
                                                </li>
                                                <li>
                                                    Partners<br/>
                                                    Barbra Streisand With Various Artists<br/>
                                                    Label: Columbia Records
                                                </li>
                                            </ol>
                                        </div>
                                        <div class="modal-footer">
                                            <a href="#!" class=" modal-action modal-close waves-effect waves-green btn-flat">Close</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col s12 m12 l4">
                            <div class="card blue-grey z-depth-2">
                                <div class="card-content white-text nominee">
                                    <h4 class="card-title center">BEST DANCE / ELECTRONIC ALBUM</h4>
                                    <p>Syro<br/>
                                       Aphex Twin (Singer & Producer)<br/><br/>
                                       Label: Warp Records</p>
                                </div>
                                <div class="card-action">
                                    <!-- Modal Trigger -->
                                    <a href="#modal6" class="modal-trigger">View All Nominees</a>
                                    <!-- Modal Structure -->
                                    <div id="modal6" class="modal modal-fixed-footer">
                                        <div class="modal-content">
                                            <h4>Best Dance / Electronic Album</h4>
                                            <ol>
                                                <li>
                                                    Syro<br/>
                                                    Aphex Twin<br/>
                                                    Aphex Twin, artist. Aphex Twin, producer.<br/>
                                                    Label: Warp Records
                                                </li>
                                                <li>
                                                    While(1<2)<br/>
                                                    Deadmau5<br/>
                                                    Label: Astralwerks
                                                </li>
                                                <li>
                                                    Nabuma Rubberband<br/>
                                                    Little Dragon<br/>
                                                    Label: Loma Vista Recordings / Republic
                                                </li>
                                                <li>
                                                    Do It Again<br/>
                                                    Röyksopp & Robyn<br/>
                                                    Label: Cherrytree/Interscope Records
                                                </li>
                                                <li>
                                                    Damage Control<br/>
                                                    Mat Zo<br/>
                                                    Label: Astralwerks
                                                </li>
                                            </ol>
                                        </div>
                                        <div class="modal-footer">
                                            <a href="#!" class=" modal-action modal-close waves-effect waves-green btn-flat">Close</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col s12 m12 l4">
                            <div class="card blue-grey z-depth-2">
                                <div class="card-content white-text nominee">
                                    <h4 class="card-title center">BEST ROCK PERFORMANCE</h4>
                                    <p>Lazaretto<br/>
                                       Jack White, artist.<br/><br/>
                                       Label: Third Man Records/Columbia Records</p>
                                </div>
                                <div class="card-action">
                                    <!-- Modal Trigger -->
                                    <a href="#modal7" class="modal-trigger">View All Nominees</a>
                                    <!-- Modal Structure -->
                                    <div id="modal7" class="modal modal-fixed-footer">
                                        <div class="modal-content">
                                            <h4>Best Rock Performance</h4>
                                            <ol>
                                                <li>
                                                    Lazaretto<br/>
                                                    Jack White, artist<br/>
                                                    Track from: Lazaretto<br/>
                                                    Label: Third Man Records/Columbia Records
                                                </li>
                                                <li>
                                                    Gimme Something Good<br/>
                                                    Ryan Adams<br/>
                                                    Label: Blue Note Records
                                                </li>
                                                <li>
                                                    Do I Wanna Know?<br/>
                                                    Arctic Monkeys<br/>
                                                    Track from: AM<br/>
                                                    Label: Domino Recording Co.
                                                </li>
                                                <li>
                                                    Blue Moon<br/>
                                                    Beck<br/>
                                                    Label: Capitol Records
                                                </li>
                                                <li>
                                                    Fever<br/>
                                                    The Black Keys<br/>
                                                    Track from: Turn Blue<br/>
                                                    Label: Nonesuch
                                                </li>
                                            </ol>
                                        </div>
                                        <div class="modal-footer">
                                            <a href="#!" class=" modal-action modal-close waves-effect waves-green btn-flat">Close</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col s12 m12 l4">
                            <div class="card blue-grey z-depth-2">
                                <div class="card-content white-text nominee">
                                    <h4 class="card-title center">BEST METAL PERFORMANCE</h4>

                                    <p>The Last In Line -  This Is Your Life<br/>
                                       Tenacious D (Jack Black & Kyle Gass)<br/><br/>
                                       Label: Rhino</p>
                                </div>
                                <div class="card-action">
                                    <!-- Modal Trigger -->
                                    <a href="#modal8" class="modal-trigger">View All Nominees</a>
                                    <!-- Modal Structure -->
                                    <div id="modal8" class="modal modal-fixed-footer">
                                        <div class="modal-content">
                                            <h4>Best Metal Performance</h4>
                                            <ol>
                                                <li>The Last In Line<br/>
                                                    Tenacious D (Jack Black & Kyle Gass), artists.<br/>
                                                    Track from: Ronnie James Dio - This Is Your Life<br/>
                                                    Label: Rhino
                                                </li>
                                                <li>
                                                    Neon Knights<br/>
                                                    Anthrax<br/>
                                                    Track from: Ronnie James Dio - This Is Your Life<br/>
                                                    Label: Rhino
                                                </li>
                                                <li>
                                                    High Road<br/>
                                                    Mastodon<br/>
                                                    Track from: Once More 'Round The Sun<br/>
                                                    Label: Reprise
                                                </li>
                                                <li>
                                                    Heartbreaker<br/>
                                                    Motörhead<br/>
                                                    Track from: Aftershock<br/>
                                                    Label: Udr
                                                </li>
                                                <li>
                                                    The Negative One<br/>
                                                    Slipknot<br/>
                                                    Label: Roadrunner Records
                                                </li>
                                            </ol>
                                        </div>
                                        <div class="modal-footer">
                                            <a href="#!" class=" modal-action modal-close waves-effect waves-green btn-flat">Close</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col s12 m12 l4">
                            <div class="card blue-grey z-depth-2">
                                <div class="card-content white-text nominee">
                                    <h4 class="card-title center">BEST ROCK SONG</h4>
                                    <p>Ain't It Fun - Paramore<br/>
                                       Hayley Williams & Taylor York<br/><br/>
                                       Label: Fueled By Ramen; Publishers: WB Music Corp./But Father, I Just Want To Sing/FBR Music And Hunterboro Music
                                    </p>
                                </div>
                                <div class="card-action">
                                    <!-- Modal Trigger -->
                                    <a href="#modal9" class="modal-trigger">View All Nominees</a>
                                    <!-- Modal Structure -->
                                    <div id="modal9" class="modal modal-fixed-footer">
                                        <div class="modal-content">
                                            <h4>Best Rock Song</h4>
                                            <ol>
                                                <li>Ain't It Fun<br/>
                                                    Hayley Williams & Taylor York, songwriters.(Paramore)<br/>
                                                    Track from: Paramore<br/>
                                                    Label: Fueled By Ramen; Publishers: WB Music Corp./But Father, I Just Want To Sing/FBR Music And Hunterboro Music
                                                </li>
                                                <li>
                                                    Blue Moon<br/>
                                                    Beck Hansen, songwriter (Beck)<br/>
                                                    Label: Capitol Records; Publisher: Youthless admin. by Kobalt Music Publishing, Inc.
                                                </li>
                                                <li>
                                                    Fever<br/>
                                                    D. Auerbach, B. Burton & P. Carney, songwriters (The Black Keys)<br/>
                                                    Track from: Turn Blue<br/>
                                                    Label: Nonesuch Records; Publishers: MCMOORE MCLESST Publishing admin. by Wixen Music/Sweet Science
                                                </li>
                                                <li>
                                                    Gimme Something Good<br/>
                                                    Ryan Adams, songwriter (Ryan Adams)<br/>
                                                    Label: Blue Note Records; Publisher: Barland Music admin. by BMG Rights Management (US) LLC.
                                                </li>
                                                <li>
                                                    Lazaretto<br/>
                                                    Jack White III, songwriter (Jack White)<br/>
                                                    Track from: Lazaretto<br/>
                                                    Label: Third Man Records/Columbia Records; Publisher: Third String Tunes
                                                </li>
                                            </ol>
                                        </div>
                                        <div class="modal-footer">
                                            <a href="#!" class=" modal-action modal-close waves-effect waves-green btn-flat">Close</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                      </div>
                    </p>
                </div>
            </div>
            </main>
            <i class="mdi-hardware-keyboard-arrow-up goto-top-arrow"></i>
            <footer class="page-footer">
                <div class="container">
                    <div class="row">
                        <div class="col l7 s12">
                            <h5 class="white-text">Important Note</h5>
                            <p class="grey-text text-lighten-4">
                                The above website is a part of an assignment.<br/><br/>
                                Responsibility for the accuracy of information provided is not of the developer at hand.
                            </p>
                            <a class="grey-text text-lighten-4 " href="{{ url('assignments') }}" style="font-variant: small-caps;text-decoration: underline">Link to the assignments</a>
                        </div>
                        <div class="col l4 offset-l1 s12">
                            <h5 class="white-text">Contact Us</h5>
                            <ul id="links">
                              <li><a class="btn waves-effect waves-light center fb-btn" href="#!">Find us on Facebook</a></li>
                              <li><a class="btn waves-effect waves-light center tw-btn" href="#!">Follow us on Twitter</a></li>
                              <li><a class="btn waves-effect waves-light center y-btn" href="#!">Subscribe to us on Youtube</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="footer-copyright">
                    <div class="container">
                        © 2014 - Recording Academy. All Rights Reserved.
                        <a class="grey-text text-lighten-4 right">Designed & Developed by M.S. Oberoi</a>
                    </div>
                </div>
            </footer>

@endsection
