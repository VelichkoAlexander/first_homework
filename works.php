<?php
$title = 'Мои работы';
require_once 'head.php';

require_once 'header.php';
?>
<div class="main">
    <div class="container">
        <div class="row">
            <?
            require_once 'menu.php';
            ?>
            <div class=" col-md-9">
                <div class="main_info">
                    <div class="header">
                        <h1>Мои работы </h1>
                    </div>
                    <div class="gallery">
                        <div class="row">
                            <div class="col-lg-4 col-md-4 col-xs-6 thumb">
                                <div class="view third-effect">
                                    <a href="">

                                        <img class="img-responsive" src="image/portfolio_img1.png"/>
                                    </a>

                                    <div class="mask">
                                        <a href="#" class="infor" title="Full Image">Full Image</a>
                                    </div>
                                </div>
                                <p class="site">ww.site.ru</p>

                                <p class="pre">Информация о проекте и 1 превью и 2 строки..</p>
                            </div>
                            <div class="col-lg-4 col-md-4 col-xs-6 thumb">
                                <div class=" view third-effect">
                                    <a href="">

                                        <img class="img-responsive" src="image/portfolio_img2.png"/>
                                    </a>

                                    <div class="mask">
                                        <a href="#" class="infor" title="Full Image">Full Image</a>
                                    </div>
                                </div>
                                <p class="site">ww.site.ru</p>

                                <p class="pre">Информация о проекте и 1 превью и 2 строки..</p>
                            </div>
                            <div class="col-lg-4 col-md-4 col-xs-6 thumb">
                                <div class=" view third-effect">
                                    <a href="">

                                        <img class="img-responsive" src="image/portfolio_img3.png"/>
                                    </a>

                                    <div class="mask">
                                        <a href="#" class="infor" title="Full Image">Full Image</a>
                                    </div>
                                </div>
                                <p class="site">ww.site.ru</p>

                                <p class="pre">Информация о проекте и 1 превью и 2 строки..</p>
                            </div>
                            <div class="col-lg-4 col-md-4 col-xs-6 thumb">
                                <div class=" view third-effect">
                                    <a href="">

                                        <img class="img-responsive" src="image/portfolio_img4.png"/>
                                    </a>

                                    <div class="mask">
                                        <a href="#" class="infor" title="Full Image">Full Image</a>
                                    </div>
                                </div>
                                <p class="site">ww.site.ru</p>

                                <p class="pre">Информация о проекте и 1 превью и 2 строки..</p>
                            </div>
                            <div class="col-lg-4 col-md-4 col-xs-6 thumb">


                                <a href="#" class="add_project" data-toggle="modal" data-target="#myModal"
                                   title="Full Image">Добавить проект</a>

                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
</div>
<!-- Modal -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal"><span
                        aria-hidden="true">&times;</span><span
                        class="sr-only">Close</span></button>
                <h4 class="modal-title" id="myModalLabel">Добовление проекта</h4>

            </div>

            <div class="modal-body">
                <form role="form">
                    <div class="form-group">
                        <label for="name">Название проекта</label>
                        <input type="email" class="form-control" id="name" placeholder="Введите название">
                    </div>
                    <div class="form-group clearfix">
                        <label for="InputFile">Картинка проекта</label>
                        <input type="text" class="form-control" id="InputFile" placeholder="Загрузите изображение">
                        <a class="add_image" href=""></a>
                    </div>

                    <div class="form-group">
                        <label for="url">URL проекта</label>
                        <input type="text" class="form-control" id="url"
                               placeholder="Добавть ссылку">
                    </div>
                    <div class="form-group">
                        <label for="texta1">Описание</label>
                        <textarea id="texta1" class="form-control" rows="5"
                                  placeholder="Параслов о вашем проекте"></textarea>
                    </div>
                    <div class="text-center">
                        <button type="submit" class="btn sent">Добавить</button>
                    </div>
                </form>
            </div>


        </div>
    </div>
</div>
<?
require_once 'footer.php';
?>
