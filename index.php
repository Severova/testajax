<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>

    <div class="js-material">
                <input type="radio" id="material-1" class="js-material--radio" name="material" data-name=" Глянец">
                <label for="material-1">Глянец</label>
                1000
                руб
                <div class="js-material--discount">
                    купи от
                    <span class="js-material--footage">
                        10
                    </span>
                    заплати
                    <span class="js-material--price">
                        900
                    </span>
                    за кв метр
                </div>
                <div class="js-material--discount">
                    купи от
                    <span class="js-material--footage">
                       15
                    </span>
                    заплати
                    <span class="js-material--price">
                    800
                    </span>
                    за кв метр
                </div>
            </div>
                                <div class="js-material">
                <input type="radio" id="material-2" class="js-material--radio" name="material" data-name=" Матовый">
                <label for="material-2">Матовый</label>
                900
                руб
                <div class="js-material--discount">
                    купи от
                    <span class="js-material--footage">
                        15
                    </span>
                    заплати
                    <span class="js-material--price">
                        800
                    </span>
                    за кв метр
                </div>
                <div class="js-material--discount">
                    купи от
                    <span class="js-material--footage">
                       25
                    </span>
                    заплати
                    <span class="js-material--price">
                    600
                    </span>
                    за кв метр
                </div>
            </div>
                                <div class="js-material">
                <input type="radio" id="material-3" class="js-material--radio" name="material" data-name=" Полуматовый">
                <label for="material-3">Полуматовый</label>
                1100
                руб
                <div class="js-material--discount">
                    купи от
                    <span class="js-material--footage">
                        10
                    </span>
                    заплати
                    <span class="js-material--price">
                        1000
                    </span>
                    за кв метр
                </div>
                <div class="js-material--discount">
                    купи от
                    <span class="js-material--footage">
                       20
                    </span>
                    заплати
                    <span class="js-material--price">
                    800
                    </span>
                    за кв метр
                </div>
            </div>
            <br>
<input type="text" class="js-width"> ширина
<input type="text" class="js-length"> длина
            <br>
        Монтаж люстры
        <span class="">1000</span> руб
        <input type="text" class="js-option" data-id="1"> шт.
            <br>
        Монтаж светильников
        <span class="">900</span> руб
        <input type="text" class="js-option" data-id="2"> шт.
    <br>
<input type="button" value="Рассчитать" class="js-calculate">
<div class="js-result"></div>
    
    <script
  src="https://code.jquery.com/jquery-3.3.1.min.js"
  integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
  crossorigin="anonymous"></script>
  <script src="ajax.js"></script>
</body>
</html>