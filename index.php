<?php
$title = 'Обо мне';
require_once 'head.php';
require_once 'header.php';
?>
<div class="main">
    <div class="container">
        <div class="row">
            <?
            require_once 'menu.php';
            ?>

            <div class=" col-md-9 col-sm-12">
                <article>
                    <div class="main_info">
                        <div class="header">
                            <h1>Основная информация</h1>
                        </div>
                        <div class="row">
                            <div class="col-lg-4 col-sm-4 col-xs-12">
                                <div class="avatar">
                                    <img class="img-responsive" src="image/avatar.png" alt="avatar"/>
                                </div>
                            </div>
                            <div class="col-lg-8 col-sm-8 col-xs-12">
                                <ul class="info">
                                    <li><span class="main_word">Меня зовут:</span><span class="second_word">Величко Александр Анатольевич</span>
                                    </li>
                                    <li><span class="main_word">Мой возраст:</span><span
                                            class="second_word">27 лет</span>
                                    </li>
                                    <li><span class="main_word">Мой город:</span><span class="second_word">Мариуполь, Украина</span>
                                    </li>
                                    <li><span class="main_word">Моя специализация:</span><span class="second_word">FRONTEND разработчик</span>
                                    <li><span class="main_word key_skills">Ключевые навыки:</span>

                                        <div class="skills ">
                                            <div class="tabs"><p>html</p></div>
                                            <div class="tabs"><p>css</p></div>
                                            <div class="tabs"><p>javascript</p></div>
                                            <div class="tabs"><p>gulp</p></div>
                                            <div class="tabs"><p>git</p></div>
                                        </div>
                                    </li>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </article>
                <article>
                    <div class="main_info">
                        <div class="header">
                            <h1>Опыт работы</h1>
                        </div>
                        <div class="place">
                            <p class="place_work">"ОАО ГСКТИ" - Инженер-конструктор </p>

                            <p class="year">Сентябрь 2006 - Август 2008</p>
                        </div>
                        <div class="place">
                            <p class="place_work">"ЗАО Уголь-Анализ" - Системный администратор</p>

                            <p class="year">Сентябрь 2008 - по настоящее время</p>
                        </div>
                    </div>
                </article>
                <article>
                    <div class="main_info">
                        <div class="header">
                            <h1>Образование</h1>
                        </div>
                        <div class="place_education">
                            <p class="place_work">Оконченное высшее. ПГТУ - Мариуполь</p>

                            <p class="year">Сентябрь 2004 - Июнь 2009</p>
                        </div>
                        <div class="place_education">
                            <p class="place_work">Курсы Loftschool.ru </p>

                            <p class="year">Ноябрь 2014 - по настоящее время</p>
                        </div>
                    </div>
                </article>
            </div>

        </div>
    </div>
</div>
<?
require_once 'footer.php';
?>
