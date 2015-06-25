@extends('...master')

    @section('head_css')
        <link rel="stylesheet" type="text/css" href="{{ asset('css/ass6.css') }}" />
    @endsection

    @section('head_js')
        <script type="text/javascript" src="{{ asset('js/ass6.js') }}" ></script>
    @endsection

    @section('nav-content')
        <ul id="nav-mobile" class="right hide-on-med-and-down">
            <li><a href="{{ url('assignments') }}">Assignments</a></li>
        </ul>
    @endsection

    @section('content')
        <main class="container"  style="margin-top: 2em;">
            <div class="row">
                <div class="col s12">
                    <ul class="tabs">
                        <li class="tab col s2"><a href="#tab1" class="active">Rotate Image</a></li>
                        <li class="tab col s3"><a href="#tab2">Scroll Buttons</a></li>
                        <li class="tab col s2"><a href="#tab3"> &lt;div&gt; Resizing</a></li>
                        <li class="tab col s3"><a href="#tab4">Image Slider</a></li>
                        <li class="tab col s2"><a href="#tab5">Accordion Panel</a></li>
                    </ul>
                </div>
            </div>
            <div id="tab1" class="col s12">
                <input type="range" min="0" max="360" value="0" id ="spin" oninput="showValue(this.value)"/>
                <span id="label" class="center" style="display: inline" >Degres to rotate: </span>
                <span id="range" class="center">0 degrees</span>

                <div class="center" >
                    <img src="{{ asset('image/picture.jpg') }}" id="imageTab1">
                </div>
            </div>
            <div id="tab2" class="col s12">
                <div class="center btnScrollDown">
                    <button class="btn waves-effect waves-light theme-color">
                        <i class="mdi-hardware-keyboard-arrow-down right"></i>Go Down
                    </button>
                </div>
                <h2>Paragraph 1</h2>
                <p id="para1">
                    Lorem ipsum dolor sit amet, no vix corrumpit reprehendunt, errem mentitum incorrupte ei pri. Ad sonet aliquam lucilius ius, et omnium salutandi principes nec. Debet contentiones nec eu, mea choro persequeris te. Ut usu illum nostro luptatum. Saepe mandamus ex mei, ut eum bonorum accusamus pertinacia, nam eu putent eleifend. Ea mel moderatius intellegam suscipiantur, est in dolores adolescens. Aliquid atomorum ea mei, mei ut ancillae fabellas.
                    Putent nominati electram ut duo. Quo discere qualisque no. Labore intellegebat mei eu, ex eos quod minim nihil, ponderum legendos ad pri. Vocibus perfecto quo ad. Ius ex homero viderer, ex soleat molestie nam.
                    Duo at prima velit facilisis, nominavi expetendis dissentiunt ad pro. Dolor temporibus at ius. Graecis appetere scripserit eu mel. Et labore detracto eam. Vix virtute noluisse ad, ferri magna quaeque mei ut, sea ut clita oratio corpora.
                    Per sale ceteros deterruisset ad, at fabulas legendos imperdiet eam. Est et detracto convenire, ea congue facilisis cum. Tation aliquid interpretaris ei pro, dolor putent ex sed. Eruditi volutpat definitionem eam at, illud nobis gloriatur mel at.
                    Sit suas vivendo denique ei. Ea fugit soluta scaevola his, inani omnesque in pro, summo facete quo ei. Error omnium argumentum ius ad. Eripuit percipitur complectitur vel ea, eos rebum ridens intellegam cu, has audire dissentiunt mediocritatem eu.
                </p>
                <h2>Paragraph 2</h2>
                <p id="para2">
                    Lorem ipsum dolor sit amet, no vix corrumpit reprehendunt, errem mentitum incorrupte ei pri. Ad sonet aliquam lucilius ius, et omnium salutandi principes nec. Debet contentiones nec eu, mea choro persequeris te. Ut usu illum nostro luptatum. Saepe mandamus ex mei, ut eum bonorum accusamus pertinacia, nam eu putent eleifend. Ea mel moderatius intellegam suscipiantur, est in dolores adolescens. Aliquid atomorum ea mei, mei ut ancillae fabellas.
                    Putent nominati electram ut duo. Quo discere qualisque no. Labore intellegebat mei eu, ex eos quod minim nihil, ponderum legendos ad pri. Vocibus perfecto quo ad. Ius ex homero viderer, ex soleat molestie nam.
                    Duo at prima velit facilisis, nominavi expetendis dissentiunt ad pro. Dolor temporibus at ius. Graecis appetere scripserit eu mel. Et labore detracto eam. Vix virtute noluisse ad, ferri magna quaeque mei ut, sea ut clita oratio corpora.
                    Per sale ceteros deterruisset ad, at fabulas legendos imperdiet eam. Est et detracto convenire, ea congue facilisis cum. Tation aliquid interpretaris ei pro, dolor putent ex sed. Eruditi volutpat definitionem eam at, illud nobis gloriatur mel at.
                    Sit suas vivendo denique ei. Ea fugit soluta scaevola his, inani omnesque in pro, summo facete quo ei. Error omnium argumentum ius ad. Eripuit percipitur complectitur vel ea, eos rebum ridens intellegam cu, has audire dissentiunt mediocritatem eu.
                </p>
                <h2>Paragraph 3</h2>
                <p id="para3">
                    Lorem ipsum dolor sit amet, no vix corrumpit reprehendunt, errem mentitum incorrupte ei pri. Ad sonet aliquam lucilius ius, et omnium salutandi principes nec. Debet contentiones nec eu, mea choro persequeris te. Ut usu illum nostro luptatum. Saepe mandamus ex mei, ut eum bonorum accusamus pertinacia, nam eu putent eleifend. Ea mel moderatius intellegam suscipiantur, est in dolores adolescens. Aliquid atomorum ea mei, mei ut ancillae fabellas.
                    Putent nominati electram ut duo. Quo discere qualisque no. Labore intellegebat mei eu, ex eos quod minim nihil, ponderum legendos ad pri. Vocibus perfecto quo ad. Ius ex homero viderer, ex soleat molestie nam.
                    Duo at prima velit facilisis, nominavi expetendis dissentiunt ad pro. Dolor temporibus at ius. Graecis appetere scripserit eu mel. Et labore detracto eam. Vix virtute noluisse ad, ferri magna quaeque mei ut, sea ut clita oratio corpora.
                    Per sale ceteros deterruisset ad, at fabulas legendos imperdiet eam. Est et detracto convenire, ea congue facilisis cum. Tation aliquid interpretaris ei pro, dolor putent ex sed. Eruditi volutpat definitionem eam at, illud nobis gloriatur mel at.
                    Sit suas vivendo denique ei. Ea fugit soluta scaevola his, inani omnesque in pro, summo facete quo ei. Error omnium argumentum ius ad. Eripuit percipitur complectitur vel ea, eos rebum ridens intellegam cu, has audire dissentiunt mediocritatem eu.
                </p>
                <h2>Paragraph 4</h2>
                <p id="para4">
                    Lorem ipsum dolor sit amet, no vix corrumpit reprehendunt, errem mentitum incorrupte ei pri. Ad sonet aliquam lucilius ius, et omnium salutandi principes nec. Debet contentiones nec eu, mea choro persequeris te. Ut usu illum nostro luptatum. Saepe mandamus ex mei, ut eum bonorum accusamus pertinacia, nam eu putent eleifend. Ea mel moderatius intellegam suscipiantur, est in dolores adolescens. Aliquid atomorum ea mei, mei ut ancillae fabellas.
                    Putent nominati electram ut duo. Quo discere qualisque no. Labore intellegebat mei eu, ex eos quod minim nihil, ponderum legendos ad pri. Vocibus perfecto quo ad. Ius ex homero viderer, ex soleat molestie nam.
                    Duo at prima velit facilisis, nominavi expetendis dissentiunt ad pro. Dolor temporibus at ius. Graecis appetere scripserit eu mel. Et labore detracto eam. Vix virtute noluisse ad, ferri magna quaeque mei ut, sea ut clita oratio corpora.
                    Per sale ceteros deterruisset ad, at fabulas legendos imperdiet eam. Est et detracto convenire, ea congue facilisis cum. Tation aliquid interpretaris ei pro, dolor putent ex sed. Eruditi volutpat definitionem eam at, illud nobis gloriatur mel at.
                    Sit suas vivendo denique ei. Ea fugit soluta scaevola his, inani omnesque in pro, summo facete quo ei. Error omnium argumentum ius ad. Eripuit percipitur complectitur vel ea, eos rebum ridens intellegam cu, has audire dissentiunt mediocritatem eu.
                </p>
                <h2>Paragraph 5</h2>
                <p id="para5">
                    Lorem ipsum dolor sit amet, no vix corrumpit reprehendunt, errem mentitum incorrupte ei pri. Ad sonet aliquam lucilius ius, et omnium salutandi principes nec. Debet contentiones nec eu, mea choro persequeris te. Ut usu illum nostro luptatum. Saepe mandamus ex mei, ut eum bonorum accusamus pertinacia, nam eu putent eleifend. Ea mel moderatius intellegam suscipiantur, est in dolores adolescens. Aliquid atomorum ea mei, mei ut ancillae fabellas.
                    Putent nominati electram ut duo. Quo discere qualisque no. Labore intellegebat mei eu, ex eos quod minim nihil, ponderum legendos ad pri. Vocibus perfecto quo ad. Ius ex homero viderer, ex soleat molestie nam.
                    Duo at prima velit facilisis, nominavi expetendis dissentiunt ad pro. Dolor temporibus at ius. Graecis appetere scripserit eu mel. Et labore detracto eam. Vix virtute noluisse ad, ferri magna quaeque mei ut, sea ut clita oratio corpora.
                    Per sale ceteros deterruisset ad, at fabulas legendos imperdiet eam. Est et detracto convenire, ea congue facilisis cum. Tation aliquid interpretaris ei pro, dolor putent ex sed. Eruditi volutpat definitionem eam at, illud nobis gloriatur mel at.
                    Sit suas vivendo denique ei. Ea fugit soluta scaevola his, inani omnesque in pro, summo facete quo ei. Error omnium argumentum ius ad. Eripuit percipitur complectitur vel ea, eos rebum ridens intellegam cu, has audire dissentiunt mediocritatem eu.
                </p>
                <h2>Paragraph 6</h2>
                <p id="para6">
                    Lorem ipsum dolor sit amet, no vix corrumpit reprehendunt, errem mentitum incorrupte ei pri. Ad sonet aliquam lucilius ius, et omnium salutandi principes nec. Debet contentiones nec eu, mea choro persequeris te. Ut usu illum nostro luptatum. Saepe mandamus ex mei, ut eum bonorum accusamus pertinacia, nam eu putent eleifend. Ea mel moderatius intellegam suscipiantur, est in dolores adolescens. Aliquid atomorum ea mei, mei ut ancillae fabellas.
                    Putent nominati electram ut duo. Quo discere qualisque no. Labore intellegebat mei eu, ex eos quod minim nihil, ponderum legendos ad pri. Vocibus perfecto quo ad. Ius ex homero viderer, ex soleat molestie nam.
                    Duo at prima velit facilisis, nominavi expetendis dissentiunt ad pro. Dolor temporibus at ius. Graecis appetere scripserit eu mel. Et labore detracto eam. Vix virtute noluisse ad, ferri magna quaeque mei ut, sea ut clita oratio corpora.
                    Per sale ceteros deterruisset ad, at fabulas legendos imperdiet eam. Est et detracto convenire, ea congue facilisis cum. Tation aliquid interpretaris ei pro, dolor putent ex sed. Eruditi volutpat definitionem eam at, illud nobis gloriatur mel at.
                    Sit suas vivendo denique ei. Ea fugit soluta scaevola his, inani omnesque in pro, summo facete quo ei. Error omnium argumentum ius ad. Eripuit percipitur complectitur vel ea, eos rebum ridens intellegam cu, has audire dissentiunt mediocritatem eu.
                </p>
                <h2>Paragraph 7</h2>
                <p id="para7">
                    Lorem ipsum dolor sit amet, no vix corrumpit reprehendunt, errem mentitum incorrupte ei pri. Ad sonet aliquam lucilius ius, et omnium salutandi principes nec. Debet contentiones nec eu, mea choro persequeris te. Ut usu illum nostro luptatum. Saepe mandamus ex mei, ut eum bonorum accusamus pertinacia, nam eu putent eleifend. Ea mel moderatius intellegam suscipiantur, est in dolores adolescens. Aliquid atomorum ea mei, mei ut ancillae fabellas.
                    Putent nominati electram ut duo. Quo discere qualisque no. Labore intellegebat mei eu, ex eos quod minim nihil, ponderum legendos ad pri. Vocibus perfecto quo ad. Ius ex homero viderer, ex soleat molestie nam.
                    Duo at prima velit facilisis, nominavi expetendis dissentiunt ad pro. Dolor temporibus at ius. Graecis appetere scripserit eu mel. Et labore detracto eam. Vix virtute noluisse ad, ferri magna quaeque mei ut, sea ut clita oratio corpora.
                    Per sale ceteros deterruisset ad, at fabulas legendos imperdiet eam. Est et detracto convenire, ea congue facilisis cum. Tation aliquid interpretaris ei pro, dolor putent ex sed. Eruditi volutpat definitionem eam at, illud nobis gloriatur mel at.
                    Sit suas vivendo denique ei. Ea fugit soluta scaevola his, inani omnesque in pro, summo facete quo ei. Error omnium argumentum ius ad. Eripuit percipitur complectitur vel ea, eos rebum ridens intellegam cu, has audire dissentiunt mediocritatem eu.
                </p>
                <div class="center btnScrollUp" style="margin-bottom: 1em;">
                    <button class="btn waves-effect waves-light theme-color">
                        <i class="mdi-hardware-keyboard-arrow-up right"></i>Go Up
                    </button>
                </div>
            </div>
            <div id="tab3" class="col s12">
                <div class="resizediv">
                    <div class="header">
                        Header for resizeable div
                    </div>
                    <p class="resize-content">
                        Lorem ipsum dolor sit amet, no vix corrumpit reprehendunt, errem mentitum incorrupte ei pri. Ad sonet aliquam lucilius ius, et omnium salutandi principes nec. Debet contentiones nec eu, mea choro persequeris te. Ut usu illum nostro luptatum. Saepe mandamus ex mei, ut eum bonorum accusamus pertinacia, nam eu putent eleifend. Ea mel moderatius intellegam suscipiantur, est in dolores adolescens. Aliquid atomorum ea mei, mei ut ancillae fabellas.
                        Putent nominati electram ut duo. Quo discere qualisque no. Labore intellegebat mei eu, ex eos quod minim nihil, ponderum legendos ad pri. Vocibus perfecto quo ad. Ius ex homero viderer, ex soleat molestie nam.
                        Duo at prima velit facilisis, nominavi expetendis dissentiunt ad pro. Dolor temporibus at ius. Graecis appetere scripserit eu mel. Et labore detracto eam. Vix virtute noluisse ad, ferri magna quaeque mei ut, sea ut clita oratio corpora.
                        Per sale ceteros deterruisset ad, at fabulas legendos imperdiet eam. Est et detracto convenire, ea congue facilisis cum. Tation aliquid interpretaris ei pro, dolor putent ex sed. Eruditi volutpat definitionem eam at, illud nobis gloriatur mel at.
                        Sit suas vivendo denique ei. Ea fugit soluta scaevola his, inani omnesque in pro, summo facete quo ei. Error omnium argumentum ius ad. Eripuit percipitur complectitur vel ea, eos rebum ridens intellegam cu, has audire dissentiunt mediocritatem eu.
                    </p>
                </div>
            </div>
            <div id="tab4" class="col s12">
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
                <div class="slider-nav">
                    <a class="arrow-prev"><i class="medium mdi-hardware-keyboard-arrow-left"></i></a>
                    <ul class="slider-dots">
                        <li class="dot active-dot">&bull;</li>
                        <li class="dot">&bull;</li>
                        <li class="dot">&bull;</li>
                        <li class="dot">&bull;</li>
                    </ul>
                    <a class="arrow-next"><i class="medium mdi-hardware-keyboard-arrow-right"></i></a>
                </div>
            </div>
            <div id="tab5" class="col s12">
                <ul class="collapsible" data-collapsible="accordion">
                    <li>
                      <div class="collapsible-header active"><i class="mdi-content-send"></i>First</div>
                      <div class="collapsible-body"><p>Random Text 1</p></div>
                    </li>
                    <li>
                      <div class="collapsible-header"><i class="mdi-content-send"></i>Second</div>
                      <div class="collapsible-body"><p>Random Text 2</p></div>
                    </li>
                    <li>
                      <div class="collapsible-header"><i class="mdi-content-send"></i>Third</div>
                      <div class="collapsible-body"><p>Random Text 3</p></div>
                    </li>
                  </ul>
            </div>
        </main>
    @endsection