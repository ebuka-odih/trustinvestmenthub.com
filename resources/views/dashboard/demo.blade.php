<!DOCTYPE HTML>
<html>
<head>
    <meta charset="utf-8">
    <script src="https://unitrustinvest.com/LIVECHAT.js" async></script>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Home | Uni Trust Invest</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- ALT STYLE DOMAIN -->
    <link href="css/altcss.css" rel="stylesheet">
    <link href="style2.css" rel="stylesheet">
    <link href="alt/css/bootstrap.css" rel="stylesheet">
    <link href="alt/css/bootstrap.min.css" rel="stylesheet">
    <script src="alt/js/bootstrap.js" rel="stylesheet"></script>
    <script src="alt/js/bootstrap.min.js" rel="stylesheet"></script>
    <!-- END ALT STYLE DOMAIN -->
    <!-- ALT STYLE DOMAIN -->
    <link href="https://unitrustinvest.com/trade/css/altcss.css" rel="stylesheet">
    <link href="https://unitrustinvest.com/trade/style2.css" rel="stylesheet">
    <link href="https://unitrustinvest.com/trade/alt/css/bootstrap.css" rel="stylesheet">
    <link href="https://unitrustinvest.com/trade/alt/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://unitrustinvest.com/trade/alt/js/bootstrap.js" rel="stylesheet"></script>
    <script src="https://unitrustinvest.com/trade/alt/js/bootstrap.min.js" rel="stylesheet"></script>
    <!-- END ALT STYLE DOMAIN -->

    <script>
        document.onkeydown = function(e) {
            if(event.keyCode == 123){
                return false;
            }
            if (e.ctrlKey && e.shiftKey && e.keyCode == 'I'.charCodeAt(0)){
                return false;
            }
            if(e.ctrlKey && e.shiftKey && e.keyCode == 'J'.charCodeAt(0)){
                return false;
            }
            if(e.ctrlKey && e.keyCode == 'U'.charCodeAt(0)){
                return false;
            }
        }
    </script>
</head>

<body style="font-family: 'Roboto', sans-serif;" oncontextmenu="return fals">
<nav class="py-4" style="background-color: #105BAA;">
    <a class="alt_logolink" href="index.html"><img src="user/images/logo-dark.png" style="padding-left: 10px; margin-right: 5px; height: 30px;"><b style="color: white; font-size: 18px;">Uni Trust Invest</b></a>
    <!-- LOG OUT -->
    <a href="logout" style="color: white; background-color: #105BAA; font-size: 14px; font-weight: bold; float: right; margin-right: 20px; padding: 5px 10px; border-radius: 5px; border: 2px solid #fff;">Sign Out</a>
    <!--//  -->
    <div style="float: right; padding: 5px 10px;"><h6 style="display: inline; color: #fff; font-size: 15px;">nancy112</h6></div>
</nav>

<!-- MODAL FOR ACCOUNT VERIFICATION -->



<!-- ///// -->




<section class="container-fluid userdashboard">
    <div class="row">
        <!-- ~SIDENAV -->
        <div class="col-3 alt_sidenav">
            <a href="userdashboard" class="alt_dlinks">
                <span class="dash_links">DASHBOARD</span>
                <i class="fa-2x fa fa-dashboard py-2 px-3"></i>
            </a>
            <a href="fund_account" class="alt_dlinks">
                <span class="dash_links">FUND ACCOUNT</span>
                <i class="fa-2x fa fa-money py-2 px-3"></i>
            </a>
            <a href="withdrawl_funds" class="alt_dlinks">
                <span class="dash_links">WITHDRAWL FUNDS</span>
                <i class="fa-2x fa fa-bank py-2 px-3"></i>
            </a>
            <a href="user_profile" class="alt_dlinks">
                <span class="dash_links">USER PROFILE</span>
                <i class="fa-2x fa fa-user py-2 px-3"></i>
            </a>
            <a href="upload_documents" class="alt_dlinks">
                <span class="dash_links">UPLOAD DOCUMENTS</span>
                <i class="fa-2x fa fa-download py-2 px-3"></i>
            </a>
        </div>
        <!-- END ~SIDENAV -->
        <!-- ~SECTION-DISPLAY -->
        <div class="col-9 p-0 m-0">
            <center>
                <div class="alert alert-info">Hello Nancy seting billin</div>
            </center>
            <div class="row text-center m-0 p-0">
                <div class="col-lg-4 col-md-6 right_display">
                    <img style="width: 70px;" src="images/bal.png" alt="balance"/>
                    <p id="balance">
                        <b style="font-size: 30px; color: #105BAA;">$ 4,000</b><br/> BALANCE
                    </p>
                </div>
                <div class="col-lg-4 col-6 right_display">
                    <img style="width: 70px;" src="images/bonus.png" alt="bonus"/><p id="bonus"><b style="font-size: 15px; color: #105BAA;">$ 400</b><br/> BONUS</p>
                </div>
                <div class="col-lg-4 col-6 right_display">
                    <img style="width: 65px;" src="images/current_invest.png" alt="cinvest"/><p id="cinvest"><b style="font-size: 15px; color: #105BAA;">$ 200</b><br/> INVESTMENT</p>
                </div>
                <div class="col-lg-4 col-6 right_display">
                    <img style="width: 70px;" src="images/profit.png" alt="profit"/><p id="profit"><b style="font-size: 15px; color: #105BAA;">$ 60</b><br/> RISING PROFIT</p>
                </div>
                <div class="col-lg-4 col-6 right_display">
                    <img style="width: 70px;" src="images/active.png" alt="active"/><p id="active"><b style="font-size: 15px; color: #105BAA;">62,560</b><br/> ACTIVE TRADES</p>
                </div>
                <div class="col-lg-4 col-6 right_display">
                    <img style="width: 85px;" src="images/registered.png" alt="traders"/><p id="traders"><b style="font-size: 15px; color: #105BAA;">986,900</b><br/> CURRENT TRADERS</p>
                </div>
            </div>
            <!-- END ~SECTION-DISPLAY -->


            <!-- TradingView Widget BEGIN -->
            <div class="tradingview-widget-container">
                <div id="tradingview_741c8">
                    <div id="tradingview_4c6c3-wrapper" style="position: relative;box-sizing: content-box;width: 980px;height: 610px;margin: 0 auto !important;padding: 0 !important;font-family:Arial,sans-serif;overflow: hidden;border-radius: 3px;"><div style="width: 980px;height: 610px;background: transparent;padding: 0 !important;"><iframe id="tradingview_4c6c3" src="https://s.tradingview.com/widgetembed/?frameElementId=tradingview_4c6c3&amp;symbol=FX%3AEURUSD&amp;interval=1&amp;range=ytd&amp;hidesidetoolbar=0&amp;symboledit=1&amp;saveimage=1&amp;toolbarbg=f1f3f6&amp;details=1&amp;studies=CCI%40tv-basicstudies&amp;theme=Dark&amp;style=1&amp;timezone=Etc%2FUTC&amp;withdateranges=1&amp;studies_overrides=%7B%7D&amp;overrides=%7B%7D&amp;enabled_features=%5B%5D&amp;disabled_features=%5B%5D&amp;locale=en&amp;utm_source=24onlinecryptotrade.com&amp;utm_medium=widget&amp;utm_campaign=chart&amp;utm_term=FX%3AEURUSD" style="width: 100%; height: 100%; margin: 0 !important; padding: 0 !important;" frameborder="0" allowtransparency="true" scrolling="no" allowfullscreen=""></iframe>
                        </div></div></div>
                <script type="text/javascript" src="https://s3.tradingview.com/tv.js"></script>
                <script type="text/javascript">
                    new TradingView.widget(
                        {
                            "width": 950,
                            "height": 610,
                            "symbol": "FX:EURUSD",
                            "timezone": "Etc/UTC",
                            "theme": "Dark",
                            "style": "1",
                            "locale": "en",
                            "toolbar_bg": "#f1f3f6",
                            "enable_publishing": false,
                            "withdateranges": true,
                            "range": "ytd",
                            "hide_side_toolbar": false,
                            "allow_symbol_change": true,
                            "details": true,
                            "studies": [
                                "CCI@tv-basicstudies"
                            ],
                            "container_id": "tradingview_741c8"
                        }
                    );
                </script>
                <!-- TradingView Widget END -->

                <div class="tradingview-widget-container" style="max-width: 950px; max-height: 450px; margin: auto;">

                    <iframe scrolling="no" allowtransparency="true" frameborder="0" src="https://s.tradingview.com/embed-widget/market-quotes/?locale=en#%7B%22width%22%3A770%2C%22height%22%3A450%2C%22symbolsGroups%22%3A%5B%7B%22originalName%22%3A%22Indices%22%2C%22symbols%22%3A%5B%7B%22name%22%3A%22COINBASE%3ABTCUSD%22%7D%2C%7B%22name%22%3A%22BITFINEX%3ABTCEUR%22%7D%2C%7B%22name%22%3A%22BITFINEX%3AAUCUSD%22%7D%2C%7B%22name%22%3A%22BITFINEX%3ABTCJPY%22%7D%2C%7B%22name%22%3A%22BITMEX%3AXBT%22%7D%2C%7B%22name%22%3A%22KRAKEN%3ALTCUSD%22%7D%2C%7B%22name%22%3A%22COINBASE%3ALTCEUR%22%7D%2C%7B%22name%22%3A%22COINBASE%3ALTCBTC%22%7D%5D%2C%22name%22%3A%22CryptoCurrencies%22%7D%2C%7B%22originalName%22%3A%22Commodities%22%2C%22symbols%22%3A%5B%7B%22displayName%22%3A%22E-Mini%20S%26P%22%2C%22name%22%3A%22CME_MINI%3AES1!%22%7D%2C%7B%22displayName%22%3A%22Euro%22%2C%22name%22%3A%22CME%3AE61!%22%7D%2C%7B%22displayName%22%3A%22Gold%22%2C%22name%22%3A%22COMEX%3AGC1!%22%7D%2C%7B%22displayName%22%3A%22Crude%20Oil%22%2C%22name%22%3A%22NYMEX%3ACL1!%22%7D%2C%7B%22displayName%22%3A%22Natural%20Gas%22%2C%22name%22%3A%22NYMEX%3ANG1!%22%7D%2C%7B%22displayName%22%3A%22Corn%22%2C%22name%22%3A%22CBOT%3AZC1!%22%7D%5D%2C%22name%22%3A%22Commodities%22%7D%2C%7B%22originalName%22%3A%22Bonds%22%2C%22symbols%22%3A%5B%7B%22displayName%22%3A%22Eurodollar%22%2C%22name%22%3A%22CME%3AGE1!%22%7D%2C%7B%22displayName%22%3A%22T-Bond%22%2C%22name%22%3A%22CBOT%3AZB1!%22%7D%2C%7B%22displayName%22%3A%22Ultra%20T-Bond%22%2C%22name%22%3A%22CBOT%3AUD1!%22%7D%2C%7B%22displayName%22%3A%22Euro%20Bund%22%2C%22name%22%3A%22EUREX%3AGG1!%22%7D%2C%7B%22displayName%22%3A%22Euro%20BTP%22%2C%22name%22%3A%22EUREX%3AII1!%22%7D%2C%7B%22displayName%22%3A%22Euro%20BOBL%22%2C%22name%22%3A%22EUREX%3AHR1!%22%7D%5D%2C%22name%22%3A%22Bonds%22%7D%2C%7B%22originalName%22%3A%22Forex%22%2C%22symbols%22%3A%5B%7B%22name%22%3A%22FX%3AEURUSD%22%7D%2C%7B%22name%22%3A%22FX%3AGBPUSD%22%7D%2C%7B%22name%22%3A%22FX%3AUSDJPY%22%7D%2C%7B%22name%22%3A%22FX%3AUSDCHF%22%7D%2C%7B%22name%22%3A%22FX%3AAUDUSD%22%7D%2C%7B%22name%22%3A%22FX%3AUSDCAD%22%7D%5D%2C%22name%22%3A%22Forex%22%7D%2C%7B%22name%22%3A%22Stocks%22%2C%22symbols%22%3A%5B%7B%22name%22%3A%22NASDAQ%3AAAPL%22%7D%2C%7B%22name%22%3A%22NASDAQ%3AFB%22%7D%2C%7B%22name%22%3A%22NSE%3AONGC%22%7D%2C%7B%22name%22%3A%22NYSE%3ABABA%22%7D%2C%7B%22name%22%3A%22XETR%3AAMZ%22%7D%5D%7D%5D%2C%22utm_source%22%3A%2224onlinecryptotrade.com%22%2C%22utm_medium%22%3A%22widget%22%2C%22utm_campaign%22%3A%22market-quotes%22%7D" style="box-sizing: border-box; height: 450px; width: 950px;"></iframe>
                </div>
            </div>
</section>

<footer style="background-color: #105BAA; color: #777;"  class="py-4 text-center">
    <small class="block">&copy; 2013 - 2022 | Uni Trust Invest All Rights Reserved.</small>
</footer>
<script src="https://unitrustinvest.com/LIVECHAT.js" async></script>
