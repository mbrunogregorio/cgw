@extends('layouts.app')

@section('content')
    <section id="home" class="home bg-black fix">
        <div class="overlay"></div>
        <div class="container">
            <div class="row">
                <div class="main_home text-center">
                    <div class="col-md-12">
                        <div class="hello_slid">
                            <div class="slid_item">
                                <img src="{{ asset('images/rodas-lixa.jpg') }}" alt="asdf" />
                            </div><!-- End off slid item -->
                            <div class="slid_item">
                                <img src="{{ asset('images/banner-01.jpg') }}" alt="asdf" />
                            </div><!-- End off slid item -->
                            <div class="slid_item">
                                <img src="{{ asset('images/banner-02.jpg') }}" alt="asdf" />
                            </div><!-- End off slid item -->
                            <div class="slid_item">
                                <img src="{{ asset('images/banner-03.jpg') }}" alt="asdf" />
                            </div><!-- End off slid item -->
                        </div>
                    </div>

                </div>


            </div><!--End off row-->
        </div><!--End off container -->
    </section> <!--End off Home Sections-->



    <!--Featured Section-->
    <section id="sobre-nos" class="features">
        <div class="container">
            <div class="row">
                <div class="head_title text-center fix">
                    <h2 class="text-uppercase">Nossos valores</h2>
            <div class="row">
                <div class="main_features fix roomy-70">
                    <div class="col-md-4">
                        <div class="features_item sm-m-top-30">
                            <div class="f_item_icon">
                                <i class="fa fa-thumbs-o-up"></i>
                            </div>
                            <div class="f_item_text">
                                <h3>PARCERIAS ESTRATÉGICAS</h3>
                                <p>Com uma visão global, buscamos fornecedores a nível mundial, para fornecer ao nosso
                                    cliente o que há de melhor no mercado de abrasivos..</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="features_item sm-m-top-30">
                            <div class="f_item_icon">
                                <i class="fa fa-tablet"></i>
                            </div>
                            <div class="f_item_text">
                                <h3>INTEGRIDADE</h3>
                                <p>Através de um sistema de gestão transparente, temos interação imediata com nossos
                                    parceiros de negócios.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="features_item sm-m-top-30">
                            <div class="f_item_icon">
                                <i class="fa fa-sliders"></i>
                            </div>
                            <div class="f_item_text">
                                <h3>INOVAÇÃO</h3>
                                <p>Com uma administração voltada a inovação, aliamos, junto aos nossos engenheiros, uma
                                    cultura de melhoria contínua e desenvolvimento de novos produtos para atender a
                                    indústria metal mecânica.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div><!-- End off row -->
        </div><!-- End off container -->
    </section><!-- End off Featured Section-->


    <!--Business Section-->
    <section id="tecnologia" class="business bg-grey roomy-70">
        <div class="container">
            <div class="row">
                <div class="main_business">
                    <div class="col-md-6">
                        <div class="business_slid">
                            <div class="slid_shap bg-grey"></div>
                            <div class="business_items text-center">
                                <div class="business_item">
                                    <div class="business_img">
                                        <iframe width="560" height="315" src="https://www.youtube.com/embed/mKhwJ46GLI8" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                                    </div>
                                </div>

                                <div class="business_item">
                                    <div class="business_img">
                                        <img src="{{ asset('/images/about-img2.jpg') }}" alt=""/>
                                    </div>
                                </div>

                                <div class="business_item">
                                    <div class="business_img">
                                        <img src="{{ asset('/images/about-img3.jpg') }}" alt=""/>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="business_item sm-m-top-50">
                            <h2 class="text-uppercase"><strong>Avançada</strong> Produção</h2>
                            <ul>
                                <li><i class="fa fa-arrow-circle-right"></i>Avançado processo de produção e
                                    desenvolvimento
                                </li>
                                <li><i class="fa  fa-arrow-circle-right"></i> Controle de qualidade</li>
                                <li><i class="fa  fa-arrow-circle-right"></i> Entrega</li>
                            </ul>
                            <p class="m-top-20">Nossa equipe de desenvolvimento aliada aos nossos engenheiros, buscam
                                continuamente melhorar os produtos já existentes, bem como desenvolver novos itens,
                                visando atender as necessidades de cada cliente, com um planejamento produtivo e
                                rigoroso controle de entrega, respeitando nossos prazos de entrega, temos sido liderança
                                de "o melhor serviço do mundo".</p>

                            <div class="business_btn">
                                <a href="https://bootstrapthemes.co" class="btn btn-default m-top-20">Saiba mais</a>
                                <a href="" class="btn btn-primary m-top-20">Compre agora</a>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section><!-- End off Business section -->


    <!--product section-->
    <section id="produtos" class="product">
        <div class="container">
            <div class="main_product roomy-80">
                <div class="head_title text-center fix">
                    <h2 class="text-uppercase">Linha Completa</h2>
                    <h5>Por mais de 50 anos, a CGW - Camel Grinding Wheels - Única fábrica de abrasivos de Israel, tem
                        sido a primeira escolha na hora de cortar e desbastar metais, com unidades em Chicago-EUA,
                        Israel (matriz) e agora no Espírito Santo - BRASIL. Temos orgulho de desenvolver produtos que
                        atendam a indústria metal mecânica buscando um melhor custo x benefício do mercado.</h5>
                </div>

                <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
                    <!-- Indicators -->
                    <ol class="carousel-indicators">
                        <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                        <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                        <li data-target="#carousel-example-generic" data-slide-to="2"></li>
                    </ol>

                    <!-- Wrapper for slides -->
                    <div class="carousel-inner" role="listbox">
                        <div class="item active">
                            <div class="container">
                                <div class="row">
                                    <div class="col-sm-3">
                                        <div class="port_item xs-m-top-30">
                                            <div class="port_img">
                                                <img src="{{ asset('/images/work-img1.jpg') }}" alt=""/>
                                                <div class="port_overlay text-center">
                                                    <a href="{{ asset('/images/work-img1.jpg') }}" class="popup-img">+</a>
                                                </div>
                                            </div>
                                            <div class="port_caption m-top-20">
                                                <h5>Your Work Title</h5>
                                                <h6>- Graphic Design</h6>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-3">
                                        <div class="port_item xs-m-top-30">
                                            <div class="port_img">
                                                <img src="{{ asset('/images/work-img2.jpg') }}" alt=""/>
                                                <div class="port_overlay text-center">
                                                    <a href="{{ asset('/images/work-img2.jpg') }}" class="popup-img">+</a>
                                                </div>
                                            </div>
                                            <div class="port_caption m-top-20">
                                                <h5>Your Work Title</h5>
                                                <h6>- Graphic Design</h6>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-3">
                                        <div class="port_item xs-m-top-30">
                                            <div class="port_img">
                                                <img src="{{ asset('/images/work-img3.jpg') }}" alt=""/>
                                                <div class="port_overlay text-center">
                                                    <a href="{{ asset('/images/work-img3.jpg') }}" class="popup-img">+</a>
                                                </div>
                                            </div>
                                            <div class="port_caption m-top-20">
                                                <h5>Your Work Title</h5>
                                                <h6>- Graphic Design</h6>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-3">
                                        <div class="port_item xs-m-top-30">
                                            <div class="port_img">
                                                <img src="{{ asset('/images/work-img4.jpg') }}" alt=""/>
                                                <div class="port_overlay text-center">
                                                    <a href="{{ asset('/images/work-img4.jpg') }}" class="popup-img">+</a>
                                                </div>
                                            </div>
                                            <div class="port_caption m-top-20">
                                                <h5>Your Work Title</h5>
                                                <h6>- Graphic Design</h6>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="item">
                            <div class="container">
                                <div class="row">
                                    <div class="col-sm-3">
                                        <div class="port_item xs-m-top-30">
                                            <div class="port_img">
                                                <img src="{{ asset('/images/work-img1.jpg') }}" alt=""/>
                                                <div class="port_overlay text-center">
                                                    <a href="{{ asset('/images/work-img1.jpg') }}" class="popup-img">+</a>
                                                </div>
                                            </div>
                                            <div class="port_caption m-top-20">
                                                <h5>Your Work Title</h5>
                                                <h6>- Graphic Design</h6>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-3">
                                        <div class="port_item xs-m-top-30">
                                            <div class="port_img">
                                                <img src="{{ asset('/images/work-img2.jpg') }}" alt=""/>
                                                <div class="port_overlay text-center">
                                                    <a href="{{ asset('/images/work-img2.jpg') }}" class="popup-img">+</a>
                                                </div>
                                            </div>
                                            <div class="port_caption m-top-20">
                                                <h5>Your Work Title</h5>
                                                <h6>- Graphic Design</h6>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-3">
                                        <div class="port_item xs-m-top-30">
                                            <div class="port_img">
                                                <img src="{{ asset('/images/work-img3.jpg') }}" alt=""/>
                                                <div class="port_overlay text-center">
                                                    <a href="{{ asset('/images/work-img3.jpg') }}" class="popup-img">+</a>
                                                </div>
                                            </div>
                                            <div class="port_caption m-top-20">
                                                <h5>Your Work Title</h5>
                                                <h6>- Graphic Design</h6>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-3">
                                        <div class="port_item xs-m-top-30">
                                            <div class="port_img">
                                                <img src="{{ asset('/images/work-img4.jpg') }}" alt=""/>
                                                <div class="port_overlay text-center">
                                                    <a href="{{ asset('/images/work-img4.jpg') }}" class="popup-img">+</a>
                                                </div>
                                            </div>
                                            <div class="port_caption m-top-20">
                                                <h5>Your Work Title</h5>
                                                <h6>- Graphic Design</h6>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="item">
                            <div class="container">
                                <div class="row">
                                    <div class="col-sm-3">
                                        <div class="port_item xs-m-top-30">
                                            <div class="port_img">
                                                <img src="{{ asset('/images/work-img1.jpg') }}" alt=""/>
                                                <div class="port_overlay text-center">
                                                    <a href="{{ asset('/images/work-img1.jpg') }}" class="popup-img">+</a>
                                                </div>
                                            </div>
                                            <div class="port_caption m-top-20">
                                                <h5>Your Work Title</h5>
                                                <h6>- Graphic Design</h6>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-3">
                                        <div class="port_item xs-m-top-30">
                                            <div class="port_img">
                                                <img src="{{ asset('/images/work-img2.jpg') }}" alt=""/>
                                                <div class="port_overlay text-center">
                                                    <a href="{{ asset('/images/work-img2.jpg') }}" class="popup-img">+</a>
                                                </div>
                                            </div>
                                            <div class="port_caption m-top-20">
                                                <h5>Your Work Title</h5>
                                                <h6>- Graphic Design</h6>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-3">
                                        <div class="port_item xs-m-top-30">
                                            <div class="port_img">
                                                <img src="{{ asset('/images/work-img3.jpg') }}" alt=""/>
                                                <div class="port_overlay text-center">
                                                    <a href="{{ asset('/images/work-img3.jpg') }}" class="popup-img">+</a>
                                                </div>
                                            </div>
                                            <div class="port_caption m-top-20">
                                                <h5>Your Work Title</h5>
                                                <h6>- Graphic Design</h6>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-3">
                                        <div class="port_item xs-m-top-30">
                                            <div class="port_img">
                                                <img src="{{ asset('/images/work-img4.jpg') }}" alt=""/>
                                                <div class="port_overlay text-center">
                                                    <a href="{{ asset('/images/work-img4.jpg') }}" class="popup-img">+</a>
                                                </div>
                                            </div>
                                            <div class="port_caption m-top-20">
                                                <h5>Your Work Title</h5>
                                                <h6>- Graphic Design</h6>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>

                    <!-- Controls -->
                    <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
                        <i class="fa fa-angle-left" aria-hidden="true"></i>
                        <span class="sr-only">Previous</span>
                    </a>

                    <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
                        <i class="fa fa-angle-right" aria-hidden="true"></i>
                        <span class="sr-only">Next</span>
                    </a>
                </div>
            </div><!-- End off row -->
        </div><!-- End off container -->
    </section><!-- End off Product section -->



    <!--Test section-->
    <section id="instrucoes" class="test bg-grey roomy-60 fix">
        <div class="container">
            <div class="row">
                <div class="main_test fix">

                    <div class="col-md-12 col-sm-12 col-xs-12">
                        <div class="head_title text-center fix">
                            <h2 class="text-uppercase">segurança e Informações Técnicas</h2>
                            <h5>Saiba mais sobre nossos produtos e como utiliza-los da melhor forma</h5>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="test_item fix">
                            <div class="item_img">
                                <img class="img-circle" src="assets/images/test-img1.jpg" alt=""/>
                                <i class="fa fa-quote-left"></i>
                            </div>

                            <div class="item_text">
                                <h5>Orientação de Segurança</h5>
                                <h6>para o Uso de Rebolos Abrasivos</h6>

                                <p>Produtos abrasivos ligados são frágeis e portanto devem ser manuseados com extremo
                                    cuidado. A utilização de produtos abrasivos danificados, incorretamente montados ou
                                    utilizados impropriamente é perigoso e pode provocar sérios ferimentos. Clique aqui
                                    e saiba mais: </p>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="test_item fix sm-m-top-30">
                            <div class="item_img">
                                <img class="img-circle" src="assets/images/test-img2.jpg" alt=""/>
                                <i class="fa fa-quote-left"></i>
                            </div>

                            <div class="item_text">
                                <h5>Informações Técnicas</h5>
                                <h6>para o uso correto</h6>

                                <p>Conheça os tipos de abrasivos e Qualidade do Rebolo. O grau de qualidade no
                                    desempenho do rebolo está relacionado com as condições específicas de uma dada
                                    aplicação, tais como o tipo da máquina e a composição da peça-obra trabalhada, sendo
                                    avaliada de acordo com dois critérios: Relação-G e Eficiência. </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section><!-- End off test section -->


    <!--Brand Section-->
    <section id="brand" class="brand fix roomy-80">
        <div class="container">
            <div class="row">
                <div class="main_brand text-center">
                    <div class="col-md-2 col-sm-4 col-xs-6">
                        <div class="brand_item sm-m-top-20">
                            <img src="{{ asset('images/cbrand-img1.png') }}" alt=""/>
                        </div>
                    </div>
                    <div class="col-md-2 col-sm-4 col-xs-6">
                        <div class="brand_item sm-m-top-20">
                            <img src="{{ asset('images/cbrand-img2.png') }}" alt=""/>
                        </div>
                    </div>
                    <div class="col-md-2 col-sm-4 col-xs-6">
                        <div class="brand_item sm-m-top-20">
                            <img src="{{ asset('images/cbrand-img3.png') }}" alt=""/>
                        </div>
                    </div>
                    <div class="col-md-2 col-sm-4 col-xs-6">
                        <div class="brand_item sm-m-top-20">
                            <img src="{{ asset('images/cbrand-img4.png') }}" alt=""/>
                        </div>
                    </div>
                    <div class="col-md-2 col-sm-4 col-xs-6">
                        <div class="brand_item sm-m-top-20">
                            <img src="{{ asset('images/cbrand-img5.png') }}" alt=""/>
                        </div>
                    </div>
                    <div class="col-md-2 col-sm-4 col-xs-6">
                        <div class="brand_item sm-m-top-20">
                            <img src="{{ asset('images/cbrand-img6.png') }}" alt=""/>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section><!-- End off Brand section -->


    <!--Call to  action section-->
    <section id="action" class="action bg-primary roomy-40">
        <div class="container">
            <div class="row">
                <div class="maine_action">
                    <div class="col-md-8">
                        <div class="action_item text-center">
                            <h2 class="text-white text-uppercase">CONHEÇA OS DISCOS CGW O MELHOR CUSTO BENEFÍCIO PARA
                                SUA EMPRESA</h2>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="action_btn text-left sm-text-center">
                            <a href="{{ route('produtos') }}" class="btn btn-default">CONFIRA AQUI</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection
