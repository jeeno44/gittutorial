<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Page</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
          integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
            integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
            crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
            integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
            crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
            integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
            crossorigin="anonymous"></script>

    <script src="https://cdn.jsdelivr.net/npm/vue" type="text/javascript"></script>
    <script src="https://unpkg.com/axios/dist/axios.min.js" type="text/javascript"></script>
    <script src="https://unpkg.com/vue-router/dist/vue-router.js"></script>

    <style type="text/css">

         .curs{
             cursor: pointer;
         }

    </style>

</head>
<body>

<div class="container-fluid" id="app">

    <div class="row">
        <div class="col-12">&nbsp;</div>
    </div>

    <div class="row">
        <div class="col-12">&nbsp;</div>
    </div>
    <table class="table table-bordered">

        <thead>

        <th colspan="4">
            <button class="btn btn-info"> GIT</button>
        </th>

        </thead>

        <thead>

        <th></th>
        <th></th>
        <th></th>
        <th></th>

        </thead>

        <tbody>

        <tr>

            <td width="50px">
                <img :src="(openLay.clone) ? 'plus.gif' : 'minus.gif' " alt="" @click="openLay.clone = !openLay.clone" class="curs">
            </td>
            <td>
                @{{ 'clone' | caps }} <br>
                <div class="" v-if="!openLay.clone">
                    git clone - клонировнаие репозитория в новую директорию <br>
                    <br>
                </div>
            </td>
            <td></td>
            <td></td>

        </tr>
        <tr>

            <td width="50px">
                <img :src="(openLay.init) ? 'plus.gif' : 'minus.gif' " alt="" @click="openLay.init = !openLay.init" class="curs">
            </td>
            <td>
                @{{ 'init' | caps }} <br>
                <div class="" v-if="!openLay.init">
                    git init - инициализация (Создание) пустого репозитория <br>
                    <br>
                </div>
            </td>
            <td></td>
            <td></td>

        </tr>
        <tr>

            <td width="50px">
                <img :src="(openLay.add) ? 'plus.gif' : 'minus.gif' " alt="" @click="openLay.add = !openLay.add" class="curs">
            </td>
            <td>
                @{{ 'add' | caps }} <br>
                <div class="" v-if="!openLay.add">
                    git add - добавление файла(ов) в индекс <br>
                    <br>
                </div>
            </td>
            <td></td>
            <td></td>

        </tr>
        <tr>

            <td width="50px">
                <img :src="(openLay.mv) ? 'plus.gif' : 'minus.gif' " alt="" @click="openLay.mv = !openLay.mv" class="curs">
            </td>
            <td>
                @{{ 'mv' | caps }} <br>
                <div class="" v-if="!openLay.mv">
                    git mv - Перемещение или переименование файла, каталога или символической ссылки <br>
                    <br>
                </div>
            </td>
            <td></td>
            <td></td>

        </tr>
        <tr>

            <td width="50px">
                <img :src="(openLay.reset) ? 'plus.gif' : 'minus.gif' " alt="" @click="openLay.reset = !openLay.reset" class="curs">
            </td>
            <td>
                @{{ 'reset' | caps }} <br>
                <div class="" v-if="!openLay.reset">
                    git reset - Сбросить текущую HEAD в указанное состояние <br>
                    <br>
                </div>
            </td>
            <td></td>
            <td></td>

        </tr>
        <tr>

            <td width="50px">
                <img :src="(openLay.rm) ? 'plus.gif' : 'minus.gif' " alt="" @click="openLay.rm = !openLay.rm" class="curs">
            </td>
            <td>
                @{{ 'rm' | caps }} <br>
                <div class="" v-if="!openLay.rm">
                    git rm - Удалить файлы из рабочего дерева и из индекса <br>
                    <br>
                </div>
            </td>
            <td></td>
            <td></td>

        </tr>
        <tr>

            <td width="50px">
                <img :src="(openLay.bisect) ? 'plus.gif' : 'minus.gif' " alt="" @click="openLay.bisect = !openLay.bisect" class="curs">
            </td>
            <td>
                @{{ 'bisect' | caps }} <br>
                <div class="" v-if="!openLay.bisect">
                    git bisect - Используйте двоичный поиск, чтобы найти фиксацию, в которой возникла ошибка <br>
                    <br>
                </div>
            </td>
            <td></td>
            <td></td>

        </tr>
        <tr>

            <td width="50px">
                <img :src="(openLay.grep) ? 'plus.gif' : 'minus.gif' " alt="" @click="openLay.grep = !openLay.grep" class="curs">
            </td>
            <td>
                @{{ 'grep' | caps }} <br>
                <div class="" v-if="!openLay.grep">
                    git grep - Распечатать линии, соответствующие шаблону <br>
                    <br>
                </div>
            </td>
            <td></td>
            <td></td>

        </tr>
        <tr>

            <td width="50px">
                <img :src="(openLay.log) ? 'plus.gif' : 'minus.gif' " alt="" @click="openLay.log = !openLay.log" class="curs">
            </td>
            <td>
                @{{ 'log' | caps }} <br>
                <div class="" v-if="!openLay.log">
                    git log - Показать логи коммитов <br>
                    <br>
                </div>
            </td>
            <td></td>
            <td></td>

        </tr>
        <tr>

            <td width="50px">
                <img :src="(openLay.show) ? 'plus.gif' : 'minus.gif' " alt="" @click="openLay.show = !openLay.show" class="curs">
            </td>
            <td>
                @{{ 'show' | caps }} <br>
                <div class="" v-if="!openLay.show">
                    git show - Показывать различные типы объектов <br>
                    <br>
                </div>
            </td>
            <td></td>
            <td></td>

        </tr>
        <tr>

            <td width="50px">
                <img :src="(openLay.status) ? 'plus.gif' : 'minus.gif' " alt="" @click="openLay.status = !openLay.status" class="curs">
            </td>
            <td>
                @{{ 'status' | caps }} <br>
                <div class="" v-if="!openLay.status">
                    git status - Показать статус рабочего дерева <br>
                    <br>
                </div>
            </td>
            <td></td>
            <td></td>

        </tr>
        <tr>

            <td width="50px">
                <img :src="(openLay.branch) ? 'plus.gif' : 'minus.gif' " alt="" @click="openLay.branch = !openLay.branch" class="curs">
            </td>
            <td>
                @{{ 'branch' | caps }} <br>
                <div class="" v-if="!openLay.branch">
                    git branch - Список, создание или удаление веток <br>
                    <br>
                </div>
            </td>
            <td></td>
            <td></td>

        </tr>
        <tr>

            <td width="50px">
                <img :src="(openLay.checkout) ? 'plus.gif' : 'minus.gif' " alt="" @click="openLay.checkout = !openLay.checkout" class="curs">
            </td>
            <td>
                @{{ 'checkout' | caps }} <br>
                <div class="" v-if="!openLay.checkout">
                    git checkout - Переключение ветвей или восстановление файлов рабочего дерева <br>
                    <br>
                </div>
            </td>
            <td></td>
            <td></td>

        </tr>
        <tr>

            <td width="50px">
                <img :src="(openLay.commit) ? 'plus.gif' : 'minus.gif' " alt="" @click="openLay.commit = !openLay.commit" class="curs">
            </td>
            <td>
                @{{ 'commit' | caps }} <br>
                <div class="" v-if="!openLay.commit">
                    git commit - Записывать изменения в репозиторий <br>
                    <br>
                </div>
            </td>
            <td></td>
            <td></td>

        </tr>
        <tr>

            <td width="50px">
                <img :src="(openLay.diff) ? 'plus.gif' : 'minus.gif' " alt="" @click="openLay.diff = !openLay.diff" class="curs">
            </td>
            <td>
                @{{ 'diff' | caps }} <br>
                <div class="" v-if="!openLay.diff">
                    git diff - Показать изменения между коммитами, фиксацией и рабочим деревом <br>
                    <br>
                </div>
            </td>
            <td></td>
            <td></td>

        </tr>
        <tr>

            <td width="50px">
                <img :src="(openLay.merge) ? 'plus.gif' : 'minus.gif' " alt="" @click="openLay.merge = !openLay.merge" class="curs">
            </td>
            <td>
                @{{ 'merge' | caps }} <br>
                <div class="" v-if="!openLay.merge">
                    git merge - Объедините две или более историй развития вместе <br>
                    <br>
                </div>
            </td>
            <td></td>
            <td></td>

        </tr>
        <tr>

            <td width="50px">
                <img :src="(openLay.rebase) ? 'plus.gif' : 'minus.gif' " alt="" @click="openLay.rebase = !openLay.rebase" class="curs">
            </td>
            <td>
                @{{ 'rebase' | caps }} <br>
                <div class="" v-if="!openLay.rebase">
                    git rebase - Повторное применение коммитов поверх другого базового наконечника <br>
                    <br>
                </div>
            </td>
            <td></td>
            <td></td>

        </tr>
        <tr>

            <td width="50px">
                <img :src="(openLay.tag) ? 'plus.gif' : 'minus.gif' " alt="" @click="openLay.tag = !openLay.tag" class="curs">
            </td>
            <td>
                @{{ 'tag' | caps }} <br>
                <div class="" v-if="!openLay.tag">
                    git tag - Создание, перечисление, удаление или проверка объекта тега, подписанного с помощью GPG <br>
                    <br>
                </div>
            </td>
            <td></td>
            <td></td>

        </tr>
        <tr>

            <td width="50px">
                <img :src="(openLay.fetch) ? 'plus.gif' : 'minus.gif' " alt="" @click="openLay.fetch = !openLay.fetch" class="curs">
            </td>
            <td>
                @{{ 'fetch' | caps }} <br>
                <div class="" v-if="!openLay.fetch">
                    git fetch - Загрузить объекты и ссылки из другого репозитория <br>
                    <br>
                </div>
            </td>
            <td></td>
            <td></td>

        </tr>
        <tr>

            <td width="50px">
                <img :src="(openLay.pull) ? 'plus.gif' : 'minus.gif' " alt="" @click="openLay.pull = !openLay.pull" class="curs">
            </td>
            <td>
                @{{ 'pull' | caps }} <br>
                <div class="" v-if="!openLay.pull">
                    git pull - Получение и интеграция с другим репозиторием или локальной веткой <br>
                    <br>
                </div>
            </td>
            <td></td>
            <td></td>

        </tr>
        <tr>

            <td width="50px">
                <img :src="(openLay.push) ? 'plus.gif' : 'minus.gif' " alt="" @click="openLay.push = !openLay.push" class="curs">
            </td>
            <td>
                @{{ 'push' | caps }} <br>
                <div class="" v-if="!openLay.push">
                    git push - Обновить удаленные ссылки вместе со связанными объектами <br>
                    <br>
                </div>
            </td>
            <td></td>
            <td></td>

        </tr>
        <tr>

            <td width="50px">
                <img :src="(openLay.config) ? 'plus.gif' : 'minus.gif' " alt="" @click="openLay.config = !openLay.config" class="curs">
            </td>
            <td>
                @{{ 'config' | caps }} <br>
                <div class="" v-if="!openLay.config">
                    git config - Первоначальная настройка Git <br>
                    <br>
                </div>
            </td>
            <td></td>
            <td></td>

        </tr>

        </tbody>


    </table>


</div>


<script type="text/javascript">

    new Vue({
        el: '#app',
        data: {
            param: 'so',
            openLay: {
                clone:true,
                init:true,
                add:true,
                mv:true,
                reset:true,
                rm:true,
                bisect:true,
                grep:true,
                log:true,
                show:true,
                status:true,
                branch:true,
                checkout:true,
                commit:true,
                diff:true,
                merge:true,
                rebase:true,
                tag:true,
                fetch:true,
                pull:true,
                push:true,
                config:true,
            }
        },
        methods: {},
        components: {},
        filters: {
            caps: (value) => {
                return value.toUpperCase();
            }
        }
    });

</script>

</body>
</html>
