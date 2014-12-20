<?php
$title = 'Связаться со мной';
require_once 'head.php';

require_once 'header.php';
?>
<div class="main">
    <div class="container">
        <div class="row">
            <?php require_once 'menu.php' ?>

            <div class=" col-md-9">
                <div class="main_info">
                    <div class="feedback">
                        <div class="header_2">
                            <h1>У вас интересный проект? Напиши мне</h1>
                        </div>
                        <div class="line_2"></div>
                        <div class="row">
                            <div class="contact_wrapper">

                                <form role="form">
                                    <div class="clearfix">
                                        <div class="name form-group">
                                            <label for="name_feedback">Имя</label>
                                            <input name="name" type="text" id="name_feedback" class="form-control"
                                                   placeholder="Как к Вам Обращатся"/>
                                        </div>
                                        <div class="email form-group">
                                            <label for="email_feedback">Email</label>
                                            <input name="email" type="email" id="email_feedback" class="form-control"
                                                   placeholder="Куда мне писать"/>
                                        </div>
                                    </div>
                                    <div class="form-group text_area">
                                        <label for="text_feedback">Сообщение</label>
                                    <textarea name="user_message" class="form-control" id="text_feedback" cols="0"
                                              rows="8"
                                              placeholder="Кратко в чем суть"></textarea>
                                    </div>
                                    <div class="capcha">
                                        <div id="example12" class="g-recaptcha"
                                             data-sitekey="6LfhNP8SAAAAAMbKFl-ORyvdlMy1bJptutCoEd7n"></div>
                                    </div>
                                    <div class="buttons_1">
                                        <button type="submit" class="btn sent">Добавить</button>
                                        <button type="reset" class="btn clear">Отчистить</button>

                                    </div>


                                </form>

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
<?
require_once 'footer.php';
?>
