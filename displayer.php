<?php 
$content = "Leading exchanges, polled by the Russian press, have indicated they are not afraid of the upcoming strict crypto regulations. A requirement for coin trading platforms to establish a local office is one of the proposals in a regulatory roadmap drafted by the government in Moscow. Cryptocurrency Exchanges to Set Up Shop in Russian Federation Some of the world’s largest digital assets exchanges, interviewed by Kommersant, are not objecting to a potential requirement to establish permanent presence in Russia in order to continue to offer services to its citizens. The idea to oblige foreign-based platforms to do so is part of the government’s roadmap to regulate the country’s crypto space. The document, reportedly signed by Deputy Prime Minister Dmitry Chernyshenko, has been prepared as an alternative approach to Bank of Russia’s call for a ban on trading, among other crypto operations. With its hardline stance, the central bank has found itself in isolation as most other government institutions, including the Finance Ministry, favor regulation over prohibition. Among other requirements envisaged in the roadmap are those related to anti-money laundering efforts such as the sharing of transaction data with Rosfinmonitoring, Russia’s financial watchdog. Crypto market players will also have to put in place mechanisms to verify information about the ownership of the digital assets they are dealing with. Binance, the largest crypto exchange by volume, told the business daily it’s ready to open a branch or even register a legal entity in Russia, “if this contributes to the convenience of users and the security of operations.” Olga Goncharova, head of government relations for Russia and the CIS countries, said that Binance supports the regulatory roadmap as a step that “will make operations more understandable, transparent, and user-friendly” while also noting the proposals need further “calibration.” Another major crypto trading platform, Huobi, stated that it hopes for an “open dialogue with Russian regulators.” Its team believes that a constructive cryptocurrency law would help increase confidence in digital assets and exchanges in both individual and institutional investors. Crypto exchange AAX revealed it has no immediate plans to establish an office in the Russian Federation but it also said it may start working in this direction in case the regulations are approved. AAX is ready to comply with what it described as “legitimate” regulatory requirements. The exchange, which serves around half a million Russian residents, remarked that it keeps information about its clients, their balances, transactions, and trading activities. Russian lawmakers are now working on a new bill to fill the regulatory gaps remaining after the adoption of the law “On Digital Financial Assets.” The authors aim to define which entities will be allowed to work with cryptocurrencies, including crypto exchanges. Trading platforms incorporated abroad will be subject to a “special” registration regime, the Deputy Chair of the Security and Anti-Corruption Committee Andrey Lugovoy, one of the sponsors, told Russian media. Do you think crypto exchanges will be able to adapt to Russia’s upcoming rules for the sector? Share your thoughts on the subject in the comments section below.
"
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Page Title</title>
    <link rel="stylesheet" href="style/displayer.css">
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css" />
    <script src="https://code.jquery.com/jquery-3.7.0.min.js" integrity="sha256-2Pmvv0kuTBOenSvLm6bvfBSSHrUJ+3A7x6P5Ebd07/g=" crossorigin="anonymous"></script>
    <meta name="monetag" content="85855da632bb816933d0b2d8b0d619fe">
  </head>
<body>
    <nav class="nav">
        <i class="uil uil-bars navOpenBtn"></i>
        <a href="#" class="logo">EasyNews</a>
        <ul class="nav-links">
          <i class="uil uil-times navCloseBtn"></i>
          <li><a href="">Home</a></li>
          <li><a href="search.php?q=Technology">Tech</a></li>
          <li><a href="search.php?q=politics">Politics</a></li>
          <li><a href="search.php?q=sport">Sport</a></li>
        </ul>
        <i class="uil uil-search search-icon" id="searchIcon"></i>
        <div class="search-box">
          <i class="uil uil-search search-icon"></i>
          <form method="GET" action="search.php">
            <input type="text" placeholder="Search here..." name="q" />
          </form>
        </div>
      </nav>
  
      


<div id="wrapper">
  <div id="news-wrapper">
    <div id="horizontal-ad">
      <img src="media/english-opening.jpg" alt="">
    </div>
    <p id="title">États-Unis: what is love and in all the world une élue trumpiste brandit des photos pornographiques d'Hunter Biden devant le Congrès </p><hr><i>BBC NEWS</i> <i>2023-07-18 06:23:02</i><hr>
    <img src="media/trump.webp" alt="">
    <div id="content">
      <?php 
      for($i = 0 ; $i < strlen($content); $i++){
        if($content[$i] == "." ){
          echo $content[$i]."<br>-" ;
        }else{
          echo $content[$i] ;
        }
      }
      ?>
    </div>
  </div>
  <div id="side-ad-wrapper">
    <img src="media/add.jpg" alt="">
    <img src="media/skyscraper-wide-web-banner-template-for-sales-1-5bd1eedf660c9.png" alt="">
  </div>
</div>

<div id="related-wrapper"></div>
<script src="/script.js"></script>
</body>
</html>