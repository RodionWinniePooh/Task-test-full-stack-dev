<!doctype html>
<html lang="ru">
<head>
  <!-- Кодировка веб-страницы -->
  <meta charset="utf-8">
  <!-- Настройка viewport -->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Task test</title>
  <link rel="stylesheet" href="styles.css">

  <!-- Bootstrap CSS (jsDelivr CDN) -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
  
<?php
    function displayCountry() {
        if (isset($_GET["country"])) {
            $country = urldecode($_GET["country"]);
            if (!empty($country)) {
                echo $country;
            }
        }
    }

    function displayNoMatchesFound() {
        if (isset($_GET["matched"]) && $_GET["matched"] === '') {
            echo "no matches found";
        }
    }
?>

</head>
<body>

<div class="container border rounded-3 p-4 mt-4 shadow-sm p-3 mb-5 bg-white">
    <div class="row">

        <div class="col-lg-12 col-md-6 col-sm-6">
                <h2>Dlaczego</h2>
        </div>

        <div class="col-md-6 col-lg-6 col-sm-6 order-lg-2 position-relative" id="col">

            <div class="position-absolute top-50 start-50 translate-middle" id="container">
                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Layer_1" x="0px" y="0px" viewBox="0 0 1500 357.1" style="enable-background:new 0 0 1500 357.1;" xml:space="preserve">
                    <g>
                        <path d="M514.3,225.1L514.3,225.1c10.7,11,24.6,16.5,44.8,16.5c42.7,0,85.7-36.8,85.7-103.9c0-59.8-39.9-88.8-75.8-88.8   c-34.5,0-48,19.7-54.8,29.4V62.9c0-3.7-3.2-10.3-10.4-10.3c-19,0-44.5,0-44.5,0v248c0,6.9,5.7,10.4,10.3,10.4h44.5V225.1   L514.3,225.1z M514.3,123.9c3.2-9.3,14.6-30.2,39.1-30.2c15.3,0,36.2,5.9,36.2,45.4c0,43.4-25.3,59.7-46.3,59.7   c-15.9,0-25.4-6.7-29-10V123.9L514.3,123.9z"></path>
                        <path d="M761.8,93.7L761.8,93.7c-26.2,0-40.4,19.7-40.4,52.6c0,32.9,13.9,52.6,40.4,52.6c26.5,0,40.4-19.2,40.4-52.6   C802.2,112.9,788,93.7,761.8,93.7 M857.2,145c0,57-37.3,96.5-95,96.5c-57.7,0-95-40.3-95-96.5c0-56.2,37.1-96.5,95-96.5   C820.1,48.5,857.2,88,857.2,145L857.2,145z"></path>
                        <path d="M974.7,93.5L974.7,93.5c-26.2,0-40.4,19.7-40.4,52.6c0,32.9,13.9,52.6,40.4,52.6c26.5,0,40.4-19.2,40.4-52.6   C1015.2,112.7,1001,93.5,974.7,93.5 M1070.2,144.8c0,57-37.3,96.5-95,96.5c-57.7,0-95-40.3-95-96.5c0-56.2,37.1-96.5,95-96.5   C1033.1,48.3,1070.2,87.8,1070.2,144.8L1070.2,144.8z"></path>
                        <path d="M146.4,241.1L146.4,241.1c66.7,0,91.4-52.5,65.9-54.6c-6.9-0.6-12.9,11.4-50.1,11.4c-39,0-55-19.7-57.4-34.8h103.6   c13.4,0,20.7-11.9,22.6-19.4c8.2-32.7-9-95.3-84.6-95.3c-72,0-97.5,57.2-97.5,98.4C48.9,188.4,77.9,241.1,146.4,241.1 M147.8,92   c39,0,38.4,36.2,33,36.2l-76.2,0C104.6,117.1,119.3,92,147.8,92L147.8,92z"></path>
                        <path d="M264.6,178L264.6,178V52.6h89.7c37.4,0,67.4,19,67.4,51.8c0,21.4-12.9,31.8-21.1,35.9c9.2,3.2,29.7,14.3,29.7,41.8   c0,35.6-30.2,54.9-70.4,54.9H352l0,0h-32.2C289.6,237,264.6,225.9,264.6,178 M376.5,181.4L376.5,181.4c0-10.7-6.7-18.3-18.4-18.3   h-38.6v17.8c0,7.9,5.7,17.4,16.8,17.4h23.3C367.3,198.4,376.5,191.6,376.5,181.4L376.5,181.4z M370.2,110.3   c0.1-5.7-4.2-17.1-19-16.9h-31.7v34.8h31.7C362,128.2,370.2,121.6,370.2,110.3L370.2,110.3z"></path>
                        <path d="M1339.5,227.5V93.4h-46.7c-5.8,0-10.3-4.6-10.3-9.7V52.8H1441c4,0,10.3,3,10.3,10.3v30.2h-57v143.8h-44.5   C1342.9,237.2,1339.5,231.2,1339.5,227.5"></path>
                        <path d="M1097,227.2V52.8h109.4c30.2,0,55.2,11.1,55.2,59v125.4h-44.7c-4.5,0-10.2-3.5-10.2-10.1l0-116.3   c-0.1-8.1-6.3-17.4-17.5-17.4h-37.6v143.8h-44.1C1100.2,237.2,1097,230.9,1097,227.2"></path>
                    </g>
                </svg>
            </div>

            <div class="position-absolute top-0 end-0 disappearance">
                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Layer_1" x="0px" y="0px" viewBox="0 0 1500 357.1" style="enable-background:new 0 0 1500 357.1;" xml:space="preserve">
                    <g>
                        <path d="M514.3,225.1L514.3,225.1c10.7,11,24.6,16.5,44.8,16.5c42.7,0,85.7-36.8,85.7-103.9c0-59.8-39.9-88.8-75.8-88.8   c-34.5,0-48,19.7-54.8,29.4V62.9c0-3.7-3.2-10.3-10.4-10.3c-19,0-44.5,0-44.5,0v248c0,6.9,5.7,10.4,10.3,10.4h44.5V225.1   L514.3,225.1z M514.3,123.9c3.2-9.3,14.6-30.2,39.1-30.2c15.3,0,36.2,5.9,36.2,45.4c0,43.4-25.3,59.7-46.3,59.7   c-15.9,0-25.4-6.7-29-10V123.9L514.3,123.9z"></path>
                        <path d="M761.8,93.7L761.8,93.7c-26.2,0-40.4,19.7-40.4,52.6c0,32.9,13.9,52.6,40.4,52.6c26.5,0,40.4-19.2,40.4-52.6   C802.2,112.9,788,93.7,761.8,93.7 M857.2,145c0,57-37.3,96.5-95,96.5c-57.7,0-95-40.3-95-96.5c0-56.2,37.1-96.5,95-96.5   C820.1,48.5,857.2,88,857.2,145L857.2,145z"></path>
                        <path d="M974.7,93.5L974.7,93.5c-26.2,0-40.4,19.7-40.4,52.6c0,32.9,13.9,52.6,40.4,52.6c26.5,0,40.4-19.2,40.4-52.6   C1015.2,112.7,1001,93.5,974.7,93.5 M1070.2,144.8c0,57-37.3,96.5-95,96.5c-57.7,0-95-40.3-95-96.5c0-56.2,37.1-96.5,95-96.5   C1033.1,48.3,1070.2,87.8,1070.2,144.8L1070.2,144.8z"></path>
                        <path d="M146.4,241.1L146.4,241.1c66.7,0,91.4-52.5,65.9-54.6c-6.9-0.6-12.9,11.4-50.1,11.4c-39,0-55-19.7-57.4-34.8h103.6   c13.4,0,20.7-11.9,22.6-19.4c8.2-32.7-9-95.3-84.6-95.3c-72,0-97.5,57.2-97.5,98.4C48.9,188.4,77.9,241.1,146.4,241.1 M147.8,92   c39,0,38.4,36.2,33,36.2l-76.2,0C104.6,117.1,119.3,92,147.8,92L147.8,92z"></path>
                        <path d="M264.6,178L264.6,178V52.6h89.7c37.4,0,67.4,19,67.4,51.8c0,21.4-12.9,31.8-21.1,35.9c9.2,3.2,29.7,14.3,29.7,41.8   c0,35.6-30.2,54.9-70.4,54.9H352l0,0h-32.2C289.6,237,264.6,225.9,264.6,178 M376.5,181.4L376.5,181.4c0-10.7-6.7-18.3-18.4-18.3   h-38.6v17.8c0,7.9,5.7,17.4,16.8,17.4h23.3C367.3,198.4,376.5,191.6,376.5,181.4L376.5,181.4z M370.2,110.3   c0.1-5.7-4.2-17.1-19-16.9h-31.7v34.8h31.7C362,128.2,370.2,121.6,370.2,110.3L370.2,110.3z"></path>
                        <path d="M1339.5,227.5V93.4h-46.7c-5.8,0-10.3-4.6-10.3-9.7V52.8H1441c4,0,10.3,3,10.3,10.3v30.2h-57v143.8h-44.5   C1342.9,237.2,1339.5,231.2,1339.5,227.5"></path>
                        <path d="M1097,227.2V52.8h109.4c30.2,0,55.2,11.1,55.2,59v125.4h-44.7c-4.5,0-10.2-3.5-10.2-10.1l0-116.3   c-0.1-8.1-6.3-17.4-17.5-17.4h-37.6v143.8h-44.1C1100.2,237.2,1097,230.9,1097,227.2"></path>
                    </g>
                </svg>
            </div>

        </div>

        <div class="col-md-12 align-self-sm-start col-lg-6 align-self-sm-start order-lg-1">
            <div class="row">
                <div class="col-6">
                    <div class="row">
                        <h3>Koszty</h3>
                        <p>Zamieniasz koszty state logistyki na koszty zmienne.</p>
                    </div>
                    <div class="row">
                        <h3>Oszczednosc czasu</h3>
                        <p>Zajmujesz sie tym, co lubisz - eCommercem, a nie logistyka.</p>
                    </div>
                    <div class="row">
                        <h3>Opakowania</h3>
                        <p>Wyzwania pakowania znamy od podszewki - scisle wspotpracujemy z producentem opakowan.</p>
                    </div>
                </div>
                <div class="col-6">
                    <div class="row">
                        <h3>Black Friday?</h3>
                        <p>Czekasz na niego z niecierpliwoscia, a nie z obawa.</p>
                    </div>
                    <div class="row">
                        <h3>Spokoj ducha</h3>
                        <p>Nie przejmujesz sie kurierami. nie zajmujesz sie wysytka zamowien.</p>
                    </div>
                    <div class="row">
                        <h3>Co dajemy dodatkowo?</h3>
                        <p>Wraz z nasza usluga otrzymujesz bezplatny konsulting w zakresie eCommerce.</p>
                    </div>
                </div>  
            </div>
        </div>

    </div>
</div>

<div class="container border rounded-3 p-4 mt-4 shadow-sm p-3 mb-5 bg-white">
    <form action="countrySearch.php" method="post">
        <div class="form-group">
            <label for="exampleInputPhone">Phone number</label>
            <input name="phone" type="text" class="form-control" id="exampleInputPhone" placeholder="Enter phone number">
        </div>
        <div class="form-group">
            <label>Country:</label>
            <label>
                <?php
                    displayCountry();
                    displayNoMatchesFound();
                ?>
            </label>
        </div>
        <button type="submit" class="btn btn-primary">Get to know the Country</button>
    </form>
</div>

<div class="modal" id="popupModal" tabindex="-1" role="dialog" aria-labelledby="popupModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalCenterTitle">By using Website Task test,you agree to our </h5>
            </div>
            <div class="modal-body">
                <a href="#" target="_blanck">Cookie Policy.</a>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal" id="myModalClose">Close</button>
                <button type="button" class="btn btn-success" id="myModalAccept">Accept</button>
            </div>
        </div>
    </div>
</div>

<!-- Подключение скриптов jQuery и Bootstrap -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

<script src="script.js"></script>

</body>
</html>