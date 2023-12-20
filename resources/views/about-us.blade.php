@extends('layouts.master')

@section('title', 'Home')

@push('css')
    <style>
        .counter {
            padding: 30px 0;
            text-align: center;
            background: #f8a700;
        }

        .counter-count {
            font-size: 70px;
            font-weight: 900;
            position: relative;
            color: #fff;
            text-align: center;
            display: inline-block;
        }

        .section {
            padding: 25px 0 50px 0;
        }

        .line {
            border-top: 2px solid #000;
            width: 50px;
            display: inline-block;
            margin: 0 10px;
            vertical-align: middle;
        }

        .list-group-item {
            border: none;
        }

        .list-group-item::before {
            content: "";
            display: inline-block;
            width: 15px;
            height: 15px;
            border: 4px solid #000;
            border-radius: 50%;
            margin-right: 10px;
            vertical-align: middle;
            margin-top: -3px;
        }

        .section-allience {
            background-color: #E1E2E2;
            width: 100%;
        }

        .wrapper {
            background-color: #E1E2E2;
            height: 200px;
            overflow: hidden;
            position: relative;
            width: 100%;
            display: flex;
            align-items: center;
            padding: 0 20px;
        }

        .wrapper:before,
        .wrapper:after {
            content: "";
            position: absolute;
            height: 200px;
            width: 150px;
            z-index: 2;
        }

        .wrapper:after {
            right: 0;
            top: 0;
            transform: rotateZ(180deg);
        }

        .wrapper:before {
            left: 0;
            top: 0;
        }

        .wrapper .track {
            display: flex;
            width: calc(150px * 16);
            animation: scroll 15s 0.5s linear infinite;
        }

        .wrapper .logo {
            width: 150px;
            margin: 0 15px;
        }

        .wrapper .logo img {
            height: 90px;
        }

        @keyframes scroll {
            from {
                transform: translateX(0);
            }

            to {
                transform: translateX(calc(-150px * 8));
            }
        }

        #stars {
            width: 1px;
            height: 1px;
            background: transparent;
            box-shadow: 1562px 1524px #FFF, 1970px 182px #FFF, 1143px 1260px #FFF, 1537px 1041px #FFF, 997px 1090px #FFF, 1407px 601px #FFF, 1774px 1350px #FFF, 1815px 692px #FFF, 389px 1121px #FFF, 893px 628px #FFF, 717px 517px #FFF, 1177px 772px #FFF, 1350px 175px #FFF, 1454px 1282px #FFF, 418px 1907px #FFF, 517px 1895px #FFF, 475px 1850px #FFF, 1507px 221px #FFF, 1187px 881px #FFF, 1889px 1040px #FFF, 974px 1366px #FFF, 320px 1446px #FFF, 243px 1905px #FFF, 611px 113px #FFF, 849px 1897px #FFF, 1556px 353px #FFF, 1266px 1807px #FFF, 537px 1574px #FFF, 1065px 825px #FFF, 1357px 815px #FFF, 1726px 1413px #FFF, 1314px 537px #FFF, 188px 220px #FFF, 651px 1471px #FFF, 842px 1993px #FFF, 1472px 1589px #FFF, 1164px 1693px #FFF, 1450px 1772px #FFF, 688px 522px #FFF, 256px 658px #FFF, 753px 254px #FFF, 533px 616px #FFF, 1553px 1430px #FFF, 1490px 1578px #FFF, 76px 1060px #FFF, 1209px 1725px #FFF, 1900px 1298px #FFF, 1824px 738px #FFF, 404px 1542px #FFF, 534px 577px #FFF, 1340px 1587px #FFF, 1893px 303px #FFF, 1959px 1823px #FFF, 1042px 1108px #FFF, 1010px 1734px #FFF, 1101px 1874px #FFF, 485px 972px #FFF, 1192px 995px #FFF, 1304px 404px #FFF, 113px 1673px #FFF, 797px 216px #FFF, 1108px 506px #FFF, 669px 55px #FFF, 395px 1318px #FFF, 254px 1796px #FFF, 1853px 1768px #FFF, 584px 1423px #FFF, 1804px 1248px #FFF, 1709px 1377px #FFF, 269px 793px #FFF, 1836px 948px #FFF, 1853px 906px #FFF, 1863px 686px #FFF, 1941px 1002px #FFF, 1196px 1184px #FFF, 1320px 1719px #FFF, 1459px 45px #FFF, 932px 173px #FFF, 1599px 666px #FFF, 273px 476px #FFF, 22px 698px #FFF, 1688px 36px #FFF, 1798px 578px #FFF, 1105px 829px #FFF, 1583px 265px #FFF, 519px 1014px #FFF, 505px 154px #FFF, 411px 556px #FFF, 868px 1191px #FFF, 1937px 791px #FFF, 687px 1763px #FFF, 476px 1924px #FFF, 991px 477px #FFF, 281px 119px #FFF, 691px 1483px #FFF, 1225px 1929px #FFF, 1093px 1357px #FFF, 944px 907px #FFF, 1649px 1156px #FFF, 142px 101px #FFF, 343px 97px #FFF, 1617px 1192px #FFF, 1422px 553px #FFF, 1647px 102px #FFF, 657px 957px #FFF, 351px 596px #FFF, 66px 112px #FFF, 1111px 200px #FFF, 1311px 910px #FFF, 1290px 1217px #FFF, 23px 1402px #FFF, 1900px 1301px #FFF, 1577px 807px #FFF, 186px 631px #FFF, 1235px 457px #FFF, 1103px 10px #FFF, 1749px 819px #FFF, 577px 509px #FFF, 1014px 745px #FFF, 1714px 919px #FFF, 1984px 1811px #FFF, 1764px 1780px #FFF, 657px 255px #FFF, 428px 1605px #FFF, 1361px 619px #FFF, 1608px 1358px #FFF, 1890px 406px #FFF, 87px 567px #FFF, 692px 1185px #FFF, 578px 1051px #FFF, 623px 634px #FFF, 1818px 194px #FFF, 1719px 1861px #FFF, 1180px 1403px #FFF, 145px 1641px #FFF, 1294px 1863px #FFF, 805px 1516px #FFF, 794px 1670px #FFF, 1982px 1592px #FFF, 854px 1844px #FFF, 496px 1517px #FFF, 618px 1608px #FFF, 678px 984px #FFF, 895px 429px #FFF, 713px 1172px #FFF, 1744px 1508px #FFF, 264px 19px #FFF, 451px 665px #FFF, 541px 1605px #FFF, 645px 175px #FFF, 100px 689px #FFF, 788px 1443px #FFF, 1378px 972px #FFF, 982px 1483px #FFF, 1228px 1727px #FFF, 1421px 919px #FFF, 1246px 1297px #FFF, 293px 128px #FFF, 1405px 1922px #FFF, 1563px 1349px #FFF, 1999px 1156px #FFF, 1935px 677px #FFF, 1366px 1701px #FFF, 965px 649px #FFF, 1324px 100px #FFF, 900px 511px #FFF, 1504px 1484px #FFF, 355px 1238px #FFF, 1248px 157px #FFF, 728px 923px #FFF, 109px 1667px #FFF, 1846px 1662px #FFF, 996px 951px #FFF, 878px 396px #FFF, 501px 1254px #FFF, 1755px 1756px #FFF, 1895px 351px #FFF, 562px 795px #FFF, 1290px 735px #FFF, 635px 582px #FFF, 1555px 1594px #FFF, 1464px 391px #FFF, 245px 591px #FFF, 706px 484px #FFF, 1970px 952px #FFF, 1176px 209px #FFF, 142px 1628px #FFF, 492px 320px #FFF, 1264px 546px #FFF, 780px 175px #FFF, 1880px 1519px #FFF, 1623px 957px #FFF, 1531px 1200px #FFF, 918px 1833px #FFF, 574px 1586px #FFF, 214px 1457px #FFF, 758px 1763px #FFF, 989px 790px #FFF, 837px 770px #FFF, 290px 1409px #FFF, 1483px 95px #FFF, 1259px 326px #FFF, 1868px 27px #FFF, 1908px 1360px #FFF, 1130px 1005px #FFF, 1381px 386px #FFF, 708px 774px #FFF, 1591px 1001px #FFF, 857px 1269px #FFF, 694px 657px #FFF, 1880px 519px #FFF, 1132px 650px #FFF, 1560px 1106px #FFF, 1306px 1151px #FFF, 180px 1119px #FFF, 1762px 145px #FFF, 699px 1798px #FFF, 814px 667px #FFF, 1454px 497px #FFF, 1069px 263px #FFF, 1622px 1173px #FFF, 1145px 248px #FFF, 1187px 120px #FFF, 1271px 748px #FFF, 752px 27px #FFF, 706px 1698px #FFF, 599px 182px #FFF, 482px 325px #FFF, 146px 1701px #FFF, 876px 1087px #FFF, 519px 1034px #FFF, 892px 235px #FFF, 921px 897px #FFF, 1859px 971px #FFF, 405px 697px #FFF, 1983px 268px #FFF, 1758px 90px #FFF, 209px 1926px #FFF, 1917px 1928px #FFF, 1439px 319px #FFF, 250px 440px #FFF, 1049px 102px #FFF, 206px 273px #FFF, 843px 1182px #FFF, 980px 1503px #FFF, 1145px 424px #FFF, 1043px 1443px #FFF, 1661px 97px #FFF, 1266px 972px #FFF, 577px 142px #FFF, 822px 1999px #FFF, 1697px 1101px #FFF, 1172px 1220px #FFF, 492px 1284px #FFF, 18px 1233px #FFF, 1989px 855px #FFF, 124px 44px #FFF, 599px 639px #FFF, 1112px 1061px #FFF, 1770px 1228px #FFF, 200px 353px #FFF, 643px 239px #FFF, 1295px 1622px #FFF, 462px 1271px #FFF, 919px 1038px #FFF, 519px 802px #FFF, 1431px 1842px #FFF, 336px 244px #FFF, 909px 60px #FFF, 391px 1588px #FFF, 593px 430px #FFF, 1818px 1377px #FFF, 841px 673px #FFF, 14px 1035px #FFF, 1979px 1620px #FFF, 166px 864px #FFF, 1856px 85px #FFF, 213px 263px #FFF, 1995px 1178px #FFF, 924px 318px #FFF, 1137px 849px #FFF, 1118px 301px #FFF, 1834px 1179px #FFF, 865px 1086px #FFF, 1022px 582px #FFF, 1197px 913px #FFF, 1467px 1620px #FFF, 463px 1823px #FFF, 1688px 1630px #FFF, 195px 1312px #FFF, 1966px 406px #FFF, 1388px 322px #FFF, 1242px 415px #FFF, 1806px 354px #FFF, 1109px 1986px #FFF, 1909px 34px #FFF, 441px 314px #FFF, 12px 1908px #FFF, 1448px 223px #FFF, 378px 1881px #FFF, 719px 1113px #FFF, 822px 261px #FFF, 1592px 1509px #FFF, 158px 1009px #FFF, 730px 324px #FFF, 859px 1386px #FFF, 1269px 1031px #FFF, 1442px 1935px #FFF, 300px 831px #FFF, 1607px 155px #FFF, 1468px 947px #FFF, 763px 1420px #FFF, 1370px 1493px #FFF, 1244px 1218px #FFF, 1327px 652px #FFF, 893px 374px #FFF, 1168px 573px #FFF, 28px 141px #FFF, 683px 1315px #FFF, 422px 59px #FFF, 1293px 1493px #FFF, 289px 1692px #FFF, 294px 423px #FFF, 920px 628px #FFF, 1090px 1205px #FFF, 1573px 1774px #FFF, 1929px 1382px #FFF, 1664px 1534px #FFF, 270px 1389px #FFF, 558px 1688px #FFF, 1455px 1081px #FFF, 1908px 1892px #FFF, 1140px 595px #FFF, 941px 1792px #FFF, 206px 752px #FFF, 853px 284px #FFF, 5px 11px #FFF, 146px 313px #FFF, 10px 1568px #FFF, 1396px 798px #FFF, 859px 270px #FFF, 1549px 853px #FFF, 918px 923px #FFF, 1459px 335px #FFF, 1132px 1571px #FFF, 977px 861px #FFF, 466px 1721px #FFF, 62px 1488px #FFF, 350px 854px #FFF, 1848px 1639px #FFF, 1342px 1432px #FFF, 466px 476px #FFF, 1574px 375px #FFF, 1212px 994px #FFF, 368px 296px #FFF, 1629px 1550px #FFF, 296px 639px #FFF, 234px 257px #FFF, 1802px 1177px #FFF, 364px 1936px #FFF, 1546px 628px #FFF, 230px 1207px #FFF, 827px 752px #FFF, 1733px 1580px #FFF, 675px 730px #FFF, 354px 1013px #FFF, 246px 40px #FFF, 467px 884px #FFF, 599px 1585px #FFF, 1906px 1986px #FFF, 361px 899px #FFF, 1943px 1264px #FFF, 966px 1307px #FFF, 1539px 1719px #FFF, 1584px 810px #FFF, 939px 1279px #FFF, 709px 1726px #FFF, 698px 943px #FFF, 1042px 77px #FFF, 383px 1187px #FFF, 1291px 915px #FFF, 1522px 1219px #FFF, 712px 1929px #FFF, 1682px 234px #FFF, 1637px 558px #FFF, 384px 1561px #FFF, 974px 804px #FFF, 1143px 1000px #FFF, 561px 359px #FFF, 675px 1439px #FFF, 644px 1644px #FFF, 787px 170px #FFF, 150px 930px #FFF, 296px 29px #FFF, 1526px 1398px #FFF, 1355px 250px #FFF, 338px 1160px #FFF, 1825px 443px #FFF, 1328px 665px #FFF, 535px 99px #FFF, 671px 1798px #FFF, 1573px 1222px #FFF, 1832px 614px #FFF, 1626px 919px #FFF, 31px 1047px #FFF, 1683px 1417px #FFF, 373px 277px #FFF, 1946px 817px #FFF, 1868px 16px #FFF, 1133px 1266px #FFF, 1368px 1621px #FFF, 1451px 1px #FFF, 1418px 974px #FFF, 954px 1233px #FFF, 1314px 576px #FFF, 1336px 1329px #FFF, 66px 1656px #FFF, 1381px 645px #FFF, 1781px 1355px #FFF, 81px 355px #FFF, 297px 1143px #FFF, 249px 1940px #FFF, 412px 151px #FFF, 1442px 926px #FFF, 868px 933px #FFF, 1883px 1224px #FFF, 1814px 976px #FFF, 1059px 1360px #FFF, 486px 1213px #FFF, 385px 1946px #FFF, 1987px 801px #FFF, 975px 1262px #FFF, 1182px 1658px #FFF, 1844px 1405px #FFF, 1021px 1989px #FFF, 96px 741px #FFF, 1651px 1004px #FFF, 1187px 1000px #FFF, 1601px 1496px #FFF, 1622px 1283px #FFF, 605px 426px #FFF, 1405px 25px #FFF, 294px 1916px #FFF, 863px 936px #FFF, 932px 1979px #FFF, 1640px 1738px #FFF, 330px 1177px #FFF, 1462px 1045px #FFF, 942px 1687px #FFF, 1917px 849px #FFF, 859px 148px #FFF, 1741px 1973px #FFF, 727px 663px #FFF, 1996px 1400px #FFF, 1750px 882px #FFF, 667px 99px #FFF, 916px 1295px #FFF, 159px 1090px #FFF, 301px 146px #FFF, 664px 1838px #FFF, 487px 1907px #FFF, 1073px 466px #FFF, 199px 937px #FFF, 1967px 937px #FFF, 1482px 1995px #FFF, 1501px 69px #FFF, 307px 1692px #FFF, 863px 1988px #FFF, 970px 922px #FFF, 923px 1372px #FFF, 1269px 1646px #FFF, 856px 1699px #FFF, 1111px 265px #FFF, 1238px 195px #FFF, 776px 1953px #FFF, 1720px 1376px #FFF, 67px 1318px #FFF, 1688px 1422px #FFF, 391px 1004px #FFF, 1891px 857px #FFF, 1863px 1548px #FFF, 1268px 1897px #FFF, 58px 320px #FFF, 279px 805px #FFF, 1221px 1205px #FFF, 1620px 1434px #FFF, 790px 1629px #FFF, 759px 495px #FFF, 459px 1890px #FFF, 981px 1158px #FFF, 1437px 664px #FFF, 634px 1871px #FFF, 1750px 828px #FFF, 1292px 865px #FFF, 416px 268px #FFF, 524px 1704px #FFF, 1951px 1827px #FFF, 1898px 112px #FFF, 663px 153px #FFF, 770px 391px #FFF, 1090px 1012px #FFF, 1843px 1874px #FFF, 1105px 1522px #FFF, 410px 295px #FFF, 148px 599px #FFF, 1609px 537px #FFF, 929px 120px #FFF, 300px 641px #FFF, 979px 536px #FFF, 589px 923px #FFF, 1264px 1545px #FFF, 1523px 1694px #FFF, 1384px 1323px #FFF, 272px 637px #FFF, 508px 1735px #FFF, 1800px 491px #FFF, 799px 342px #FFF, 636px 1271px #FFF, 1956px 646px #FFF, 1562px 1053px #FFF, 1554px 1100px #FFF, 856px 1497px #FFF, 1171px 846px #FFF, 1743px 806px #FFF, 1647px 1992px #FFF, 68px 1325px #FFF, 22px 1027px #FFF, 580px 1728px #FFF, 767px 1383px #FFF, 665px 482px #FFF, 1551px 1283px #FFF, 347px 450px #FFF, 453px 1024px #FFF, 1468px 843px #FFF, 1951px 1046px #FFF, 723px 676px #FFF, 883px 1169px #FFF, 1902px 582px #FFF, 511px 476px #FFF, 1740px 96px #FFF, 928px 138px #FFF, 1591px 1847px #FFF, 480px 1481px #FFF, 939px 1633px #FFF, 1119px 466px #FFF, 1372px 73px #FFF, 1734px 948px #FFF, 218px 930px #FFF, 1077px 479px #FFF, 1736px 1788px #FFF, 867px 1951px #FFF, 1142px 1165px #FFF, 1492px 1049px #FFF, 818px 909px #FFF, 1059px 21px #FFF, 1659px 784px #FFF, 333px 212px #FFF, 70px 23px #FFF, 741px 1187px #FFF, 484px 284px #FFF, 1506px 1924px #FFF, 404px 1624px #FFF, 732px 1232px #FFF, 426px 875px #FFF, 1268px 453px #FFF, 1036px 939px #FFF, 310px 1602px #FFF, 486px 806px #FFF, 561px 462px #FFF, 1987px 1913px #FFF, 1870px 1496px #FFF, 1644px 386px #FFF, 1337px 1319px #FFF, 1595px 26px #FFF, 24px 995px #FFF, 562px 1638px #FFF, 99px 944px #FFF, 650px 770px #FFF, 1034px 988px #FFF, 1280px 1316px #FFF, 1644px 708px #FFF, 998px 394px #FFF, 584px 1130px #FFF, 1740px 117px #FFF, 287px 1985px #FFF, 1859px 1453px #FFF, 587px 668px #FFF, 328px 1062px #FFF, 423px 801px #FFF, 372px 1691px #FFF, 1182px 1145px #FFF, 690px 1906px #FFF, 99px 373px #FFF, 1530px 282px #FFF, 1938px 1493px #FFF, 1021px 435px #FFF, 1574px 236px #FFF, 154px 162px #FFF, 1364px 1898px #FFF, 150px 42px #FFF, 647px 1374px #FFF, 1116px 510px #FFF, 183px 226px #FFF, 491px 514px #FFF, 1612px 1306px #FFF, 775px 1329px #FFF, 1624px 1024px #FFF, 437px 1478px #FFF, 1010px 1107px #FFF, 830px 1013px #FFF, 355px 3px #FFF, 22px 1145px #FFF, 1158px 136px #FFF, 446px 42px #FFF, 474px 856px #FFF, 352px 1072px #FFF, 983px 1864px #FFF, 1688px 978px #FFF, 411px 1612px #FFF, 326px 1698px #FFF, 1221px 1343px #FFF, 830px 106px #FFF, 975px 1999px #FFF, 1119px 479px #FFF, 507px 467px #FFF, 505px 109px #FFF, 843px 1059px #FFF, 162px 1814px #FFF, 1030px 1973px #FFF, 346px 717px #FFF, 334px 1525px #FFF, 998px 909px #FFF, 1256px 727px #FFF, 670px 1637px #FFF, 677px 946px #FFF, 290px 1051px #FFF, 1625px 1176px #FFF, 1594px 249px #FFF, 703px 1936px #FFF, 974px 987px #FFF, 1886px 1358px #FFF, 1931px 180px #FFF, 1917px 342px #FFF, 1812px 257px #FFF, 1300px 566px #FFF, 395px 1781px #FFF, 1589px 615px #FFF, 1211px 609px #FFF, 935px 1929px #FFF, 1045px 833px #FFF, 398px 1701px #FFF, 957px 1036px #FFF, 341px 30px #FFF, 1407px 1283px #FFF, 183px 1065px #FFF, 1477px 785px #FFF, 1451px 1284px #FFF, 1327px 1481px #FFF, 1192px 1862px #FFF, 797px 154px #FFF, 219px 829px #FFF, 910px 813px #FFF, 684px 1639px #FFF, 1161px 354px #FFF, 927px 1270px #FFF, 1586px 1785px #FFF, 710px 1675px #FFF, 624px 580px #FFF, 1036px 1567px #FFF, 554px 193px #FFF, 84px 1747px #FFF, 894px 1259px #FFF, 18px 213px #FFF, 736px 820px #FFF, 1986px 1224px #FFF, 904px 297px #FFF, 416px 820px #FFF, 949px 326px #FFF, 294px 1962px #FFF, 1214px 1023px #FFF, 708px 1683px #FFF, 1469px 1240px #FFF, 1876px 136px #FFF, 1437px 255px #FFF, 626px 1426px #FFF, 1468px 1969px #FFF, 646px 747px #FFF, 1234px 1869px #FFF, 1945px 1422px #FFF, 1857px 50px #FFF, 935px 693px #FFF, 133px 936px #FFF, 1125px 105px #FFF, 771px 556px #FFF, 1484px 805px #FFF, 1811px 675px #FFF, 1786px 255px #FFF, 1901px 1689px #FFF, 1358px 1876px #FFF, 578px 1484px #FFF;
            animation: animStar 50s linear infinite;
        }

        #stars:after {
            content: " ";
            position: absolute;
            top: 2000px;
            width: 1px;
            height: 1px;
            background: transparent;
            box-shadow: 1562px 1524px #FFF, 1970px 182px #FFF, 1143px 1260px #FFF, 1537px 1041px #FFF, 997px 1090px #FFF, 1407px 601px #FFF, 1774px 1350px #FFF, 1815px 692px #FFF, 389px 1121px #FFF, 893px 628px #FFF, 717px 517px #FFF, 1177px 772px #FFF, 1350px 175px #FFF, 1454px 1282px #FFF, 418px 1907px #FFF, 517px 1895px #FFF, 475px 1850px #FFF, 1507px 221px #FFF, 1187px 881px #FFF, 1889px 1040px #FFF, 974px 1366px #FFF, 320px 1446px #FFF, 243px 1905px #FFF, 611px 113px #FFF, 849px 1897px #FFF, 1556px 353px #FFF, 1266px 1807px #FFF, 537px 1574px #FFF, 1065px 825px #FFF, 1357px 815px #FFF, 1726px 1413px #FFF, 1314px 537px #FFF, 188px 220px #FFF, 651px 1471px #FFF, 842px 1993px #FFF, 1472px 1589px #FFF, 1164px 1693px #FFF, 1450px 1772px #FFF, 688px 522px #FFF, 256px 658px #FFF, 753px 254px #FFF, 533px 616px #FFF, 1553px 1430px #FFF, 1490px 1578px #FFF, 76px 1060px #FFF, 1209px 1725px #FFF, 1900px 1298px #FFF, 1824px 738px #FFF, 404px 1542px #FFF, 534px 577px #FFF, 1340px 1587px #FFF, 1893px 303px #FFF, 1959px 1823px #FFF, 1042px 1108px #FFF, 1010px 1734px #FFF, 1101px 1874px #FFF, 485px 972px #FFF, 1192px 995px #FFF, 1304px 404px #FFF, 113px 1673px #FFF, 797px 216px #FFF, 1108px 506px #FFF, 669px 55px #FFF, 395px 1318px #FFF, 254px 1796px #FFF, 1853px 1768px #FFF, 584px 1423px #FFF, 1804px 1248px #FFF, 1709px 1377px #FFF, 269px 793px #FFF, 1836px 948px #FFF, 1853px 906px #FFF, 1863px 686px #FFF, 1941px 1002px #FFF, 1196px 1184px #FFF, 1320px 1719px #FFF, 1459px 45px #FFF, 932px 173px #FFF, 1599px 666px #FFF, 273px 476px #FFF, 22px 698px #FFF, 1688px 36px #FFF, 1798px 578px #FFF, 1105px 829px #FFF, 1583px 265px #FFF, 519px 1014px #FFF, 505px 154px #FFF, 411px 556px #FFF, 868px 1191px #FFF, 1937px 791px #FFF, 687px 1763px #FFF, 476px 1924px #FFF, 991px 477px #FFF, 281px 119px #FFF, 691px 1483px #FFF, 1225px 1929px #FFF, 1093px 1357px #FFF, 944px 907px #FFF, 1649px 1156px #FFF, 142px 101px #FFF, 343px 97px #FFF, 1617px 1192px #FFF, 1422px 553px #FFF, 1647px 102px #FFF, 657px 957px #FFF, 351px 596px #FFF, 66px 112px #FFF, 1111px 200px #FFF, 1311px 910px #FFF, 1290px 1217px #FFF, 23px 1402px #FFF, 1900px 1301px #FFF, 1577px 807px #FFF, 186px 631px #FFF, 1235px 457px #FFF, 1103px 10px #FFF, 1749px 819px #FFF, 577px 509px #FFF, 1014px 745px #FFF, 1714px 919px #FFF, 1984px 1811px #FFF, 1764px 1780px #FFF, 657px 255px #FFF, 428px 1605px #FFF, 1361px 619px #FFF, 1608px 1358px #FFF, 1890px 406px #FFF, 87px 567px #FFF, 692px 1185px #FFF, 578px 1051px #FFF, 623px 634px #FFF, 1818px 194px #FFF, 1719px 1861px #FFF, 1180px 1403px #FFF, 145px 1641px #FFF, 1294px 1863px #FFF, 805px 1516px #FFF, 794px 1670px #FFF, 1982px 1592px #FFF, 854px 1844px #FFF, 496px 1517px #FFF, 618px 1608px #FFF, 678px 984px #FFF, 895px 429px #FFF, 713px 1172px #FFF, 1744px 1508px #FFF, 264px 19px #FFF, 451px 665px #FFF, 541px 1605px #FFF, 645px 175px #FFF, 100px 689px #FFF, 788px 1443px #FFF, 1378px 972px #FFF, 982px 1483px #FFF, 1228px 1727px #FFF, 1421px 919px #FFF, 1246px 1297px #FFF, 293px 128px #FFF, 1405px 1922px #FFF, 1563px 1349px #FFF, 1999px 1156px #FFF, 1935px 677px #FFF, 1366px 1701px #FFF, 965px 649px #FFF, 1324px 100px #FFF, 900px 511px #FFF, 1504px 1484px #FFF, 355px 1238px #FFF, 1248px 157px #FFF, 728px 923px #FFF, 109px 1667px #FFF, 1846px 1662px #FFF, 996px 951px #FFF, 878px 396px #FFF, 501px 1254px #FFF, 1755px 1756px #FFF, 1895px 351px #FFF, 562px 795px #FFF, 1290px 735px #FFF, 635px 582px #FFF, 1555px 1594px #FFF, 1464px 391px #FFF, 245px 591px #FFF, 706px 484px #FFF, 1970px 952px #FFF, 1176px 209px #FFF, 142px 1628px #FFF, 492px 320px #FFF, 1264px 546px #FFF, 780px 175px #FFF, 1880px 1519px #FFF, 1623px 957px #FFF, 1531px 1200px #FFF, 918px 1833px #FFF, 574px 1586px #FFF, 214px 1457px #FFF, 758px 1763px #FFF, 989px 790px #FFF, 837px 770px #FFF, 290px 1409px #FFF, 1483px 95px #FFF, 1259px 326px #FFF, 1868px 27px #FFF, 1908px 1360px #FFF, 1130px 1005px #FFF, 1381px 386px #FFF, 708px 774px #FFF, 1591px 1001px #FFF, 857px 1269px #FFF, 694px 657px #FFF, 1880px 519px #FFF, 1132px 650px #FFF, 1560px 1106px #FFF, 1306px 1151px #FFF, 180px 1119px #FFF, 1762px 145px #FFF, 699px 1798px #FFF, 814px 667px #FFF, 1454px 497px #FFF, 1069px 263px #FFF, 1622px 1173px #FFF, 1145px 248px #FFF, 1187px 120px #FFF, 1271px 748px #FFF, 752px 27px #FFF, 706px 1698px #FFF, 599px 182px #FFF, 482px 325px #FFF, 146px 1701px #FFF, 876px 1087px #FFF, 519px 1034px #FFF, 892px 235px #FFF, 921px 897px #FFF, 1859px 971px #FFF, 405px 697px #FFF, 1983px 268px #FFF, 1758px 90px #FFF, 209px 1926px #FFF, 1917px 1928px #FFF, 1439px 319px #FFF, 250px 440px #FFF, 1049px 102px #FFF, 206px 273px #FFF, 843px 1182px #FFF, 980px 1503px #FFF, 1145px 424px #FFF, 1043px 1443px #FFF, 1661px 97px #FFF, 1266px 972px #FFF, 577px 142px #FFF, 822px 1999px #FFF, 1697px 1101px #FFF, 1172px 1220px #FFF, 492px 1284px #FFF, 18px 1233px #FFF, 1989px 855px #FFF, 124px 44px #FFF, 599px 639px #FFF, 1112px 1061px #FFF, 1770px 1228px #FFF, 200px 353px #FFF, 643px 239px #FFF, 1295px 1622px #FFF, 462px 1271px #FFF, 919px 1038px #FFF, 519px 802px #FFF, 1431px 1842px #FFF, 336px 244px #FFF, 909px 60px #FFF, 391px 1588px #FFF, 593px 430px #FFF, 1818px 1377px #FFF, 841px 673px #FFF, 14px 1035px #FFF, 1979px 1620px #FFF, 166px 864px #FFF, 1856px 85px #FFF, 213px 263px #FFF, 1995px 1178px #FFF, 924px 318px #FFF, 1137px 849px #FFF, 1118px 301px #FFF, 1834px 1179px #FFF, 865px 1086px #FFF, 1022px 582px #FFF, 1197px 913px #FFF, 1467px 1620px #FFF, 463px 1823px #FFF, 1688px 1630px #FFF, 195px 1312px #FFF, 1966px 406px #FFF, 1388px 322px #FFF, 1242px 415px #FFF, 1806px 354px #FFF, 1109px 1986px #FFF, 1909px 34px #FFF, 441px 314px #FFF, 12px 1908px #FFF, 1448px 223px #FFF, 378px 1881px #FFF, 719px 1113px #FFF, 822px 261px #FFF, 1592px 1509px #FFF, 158px 1009px #FFF, 730px 324px #FFF, 859px 1386px #FFF, 1269px 1031px #FFF, 1442px 1935px #FFF, 300px 831px #FFF, 1607px 155px #FFF, 1468px 947px #FFF, 763px 1420px #FFF, 1370px 1493px #FFF, 1244px 1218px #FFF, 1327px 652px #FFF, 893px 374px #FFF, 1168px 573px #FFF, 28px 141px #FFF, 683px 1315px #FFF, 422px 59px #FFF, 1293px 1493px #FFF, 289px 1692px #FFF, 294px 423px #FFF, 920px 628px #FFF, 1090px 1205px #FFF, 1573px 1774px #FFF, 1929px 1382px #FFF, 1664px 1534px #FFF, 270px 1389px #FFF, 558px 1688px #FFF, 1455px 1081px #FFF, 1908px 1892px #FFF, 1140px 595px #FFF, 941px 1792px #FFF, 206px 752px #FFF, 853px 284px #FFF, 5px 11px #FFF, 146px 313px #FFF, 10px 1568px #FFF, 1396px 798px #FFF, 859px 270px #FFF, 1549px 853px #FFF, 918px 923px #FFF, 1459px 335px #FFF, 1132px 1571px #FFF, 977px 861px #FFF, 466px 1721px #FFF, 62px 1488px #FFF, 350px 854px #FFF, 1848px 1639px #FFF, 1342px 1432px #FFF, 466px 476px #FFF, 1574px 375px #FFF, 1212px 994px #FFF, 368px 296px #FFF, 1629px 1550px #FFF, 296px 639px #FFF, 234px 257px #FFF, 1802px 1177px #FFF, 364px 1936px #FFF, 1546px 628px #FFF, 230px 1207px #FFF, 827px 752px #FFF, 1733px 1580px #FFF, 675px 730px #FFF, 354px 1013px #FFF, 246px 40px #FFF, 467px 884px #FFF, 599px 1585px #FFF, 1906px 1986px #FFF, 361px 899px #FFF, 1943px 1264px #FFF, 966px 1307px #FFF, 1539px 1719px #FFF, 1584px 810px #FFF, 939px 1279px #FFF, 709px 1726px #FFF, 698px 943px #FFF, 1042px 77px #FFF, 383px 1187px #FFF, 1291px 915px #FFF, 1522px 1219px #FFF, 712px 1929px #FFF, 1682px 234px #FFF, 1637px 558px #FFF, 384px 1561px #FFF, 974px 804px #FFF, 1143px 1000px #FFF, 561px 359px #FFF, 675px 1439px #FFF, 644px 1644px #FFF, 787px 170px #FFF, 150px 930px #FFF, 296px 29px #FFF, 1526px 1398px #FFF, 1355px 250px #FFF, 338px 1160px #FFF, 1825px 443px #FFF, 1328px 665px #FFF, 535px 99px #FFF, 671px 1798px #FFF, 1573px 1222px #FFF, 1832px 614px #FFF, 1626px 919px #FFF, 31px 1047px #FFF, 1683px 1417px #FFF, 373px 277px #FFF, 1946px 817px #FFF, 1868px 16px #FFF, 1133px 1266px #FFF, 1368px 1621px #FFF, 1451px 1px #FFF, 1418px 974px #FFF, 954px 1233px #FFF, 1314px 576px #FFF, 1336px 1329px #FFF, 66px 1656px #FFF, 1381px 645px #FFF, 1781px 1355px #FFF, 81px 355px #FFF, 297px 1143px #FFF, 249px 1940px #FFF, 412px 151px #FFF, 1442px 926px #FFF, 868px 933px #FFF, 1883px 1224px #FFF, 1814px 976px #FFF, 1059px 1360px #FFF, 486px 1213px #FFF, 385px 1946px #FFF, 1987px 801px #FFF, 975px 1262px #FFF, 1182px 1658px #FFF, 1844px 1405px #FFF, 1021px 1989px #FFF, 96px 741px #FFF, 1651px 1004px #FFF, 1187px 1000px #FFF, 1601px 1496px #FFF, 1622px 1283px #FFF, 605px 426px #FFF, 1405px 25px #FFF, 294px 1916px #FFF, 863px 936px #FFF, 932px 1979px #FFF, 1640px 1738px #FFF, 330px 1177px #FFF, 1462px 1045px #FFF, 942px 1687px #FFF, 1917px 849px #FFF, 859px 148px #FFF, 1741px 1973px #FFF, 727px 663px #FFF, 1996px 1400px #FFF, 1750px 882px #FFF, 667px 99px #FFF, 916px 1295px #FFF, 159px 1090px #FFF, 301px 146px #FFF, 664px 1838px #FFF, 487px 1907px #FFF, 1073px 466px #FFF, 199px 937px #FFF, 1967px 937px #FFF, 1482px 1995px #FFF, 1501px 69px #FFF, 307px 1692px #FFF, 863px 1988px #FFF, 970px 922px #FFF, 923px 1372px #FFF, 1269px 1646px #FFF, 856px 1699px #FFF, 1111px 265px #FFF, 1238px 195px #FFF, 776px 1953px #FFF, 1720px 1376px #FFF, 67px 1318px #FFF, 1688px 1422px #FFF, 391px 1004px #FFF, 1891px 857px #FFF, 1863px 1548px #FFF, 1268px 1897px #FFF, 58px 320px #FFF, 279px 805px #FFF, 1221px 1205px #FFF, 1620px 1434px #FFF, 790px 1629px #FFF, 759px 495px #FFF, 459px 1890px #FFF, 981px 1158px #FFF, 1437px 664px #FFF, 634px 1871px #FFF, 1750px 828px #FFF, 1292px 865px #FFF, 416px 268px #FFF, 524px 1704px #FFF, 1951px 1827px #FFF, 1898px 112px #FFF, 663px 153px #FFF, 770px 391px #FFF, 1090px 1012px #FFF, 1843px 1874px #FFF, 1105px 1522px #FFF, 410px 295px #FFF, 148px 599px #FFF, 1609px 537px #FFF, 929px 120px #FFF, 300px 641px #FFF, 979px 536px #FFF, 589px 923px #FFF, 1264px 1545px #FFF, 1523px 1694px #FFF, 1384px 1323px #FFF, 272px 637px #FFF, 508px 1735px #FFF, 1800px 491px #FFF, 799px 342px #FFF, 636px 1271px #FFF, 1956px 646px #FFF, 1562px 1053px #FFF, 1554px 1100px #FFF, 856px 1497px #FFF, 1171px 846px #FFF, 1743px 806px #FFF, 1647px 1992px #FFF, 68px 1325px #FFF, 22px 1027px #FFF, 580px 1728px #FFF, 767px 1383px #FFF, 665px 482px #FFF, 1551px 1283px #FFF, 347px 450px #FFF, 453px 1024px #FFF, 1468px 843px #FFF, 1951px 1046px #FFF, 723px 676px #FFF, 883px 1169px #FFF, 1902px 582px #FFF, 511px 476px #FFF, 1740px 96px #FFF, 928px 138px #FFF, 1591px 1847px #FFF, 480px 1481px #FFF, 939px 1633px #FFF, 1119px 466px #FFF, 1372px 73px #FFF, 1734px 948px #FFF, 218px 930px #FFF, 1077px 479px #FFF, 1736px 1788px #FFF, 867px 1951px #FFF, 1142px 1165px #FFF, 1492px 1049px #FFF, 818px 909px #FFF, 1059px 21px #FFF, 1659px 784px #FFF, 333px 212px #FFF, 70px 23px #FFF, 741px 1187px #FFF, 484px 284px #FFF, 1506px 1924px #FFF, 404px 1624px #FFF, 732px 1232px #FFF, 426px 875px #FFF, 1268px 453px #FFF, 1036px 939px #FFF, 310px 1602px #FFF, 486px 806px #FFF, 561px 462px #FFF, 1987px 1913px #FFF, 1870px 1496px #FFF, 1644px 386px #FFF, 1337px 1319px #FFF, 1595px 26px #FFF, 24px 995px #FFF, 562px 1638px #FFF, 99px 944px #FFF, 650px 770px #FFF, 1034px 988px #FFF, 1280px 1316px #FFF, 1644px 708px #FFF, 998px 394px #FFF, 584px 1130px #FFF, 1740px 117px #FFF, 287px 1985px #FFF, 1859px 1453px #FFF, 587px 668px #FFF, 328px 1062px #FFF, 423px 801px #FFF, 372px 1691px #FFF, 1182px 1145px #FFF, 690px 1906px #FFF, 99px 373px #FFF, 1530px 282px #FFF, 1938px 1493px #FFF, 1021px 435px #FFF, 1574px 236px #FFF, 154px 162px #FFF, 1364px 1898px #FFF, 150px 42px #FFF, 647px 1374px #FFF, 1116px 510px #FFF, 183px 226px #FFF, 491px 514px #FFF, 1612px 1306px #FFF, 775px 1329px #FFF, 1624px 1024px #FFF, 437px 1478px #FFF, 1010px 1107px #FFF, 830px 1013px #FFF, 355px 3px #FFF, 22px 1145px #FFF, 1158px 136px #FFF, 446px 42px #FFF, 474px 856px #FFF, 352px 1072px #FFF, 983px 1864px #FFF, 1688px 978px #FFF, 411px 1612px #FFF, 326px 1698px #FFF, 1221px 1343px #FFF, 830px 106px #FFF, 975px 1999px #FFF, 1119px 479px #FFF, 507px 467px #FFF, 505px 109px #FFF, 843px 1059px #FFF, 162px 1814px #FFF, 1030px 1973px #FFF, 346px 717px #FFF, 334px 1525px #FFF, 998px 909px #FFF, 1256px 727px #FFF, 670px 1637px #FFF, 677px 946px #FFF, 290px 1051px #FFF, 1625px 1176px #FFF, 1594px 249px #FFF, 703px 1936px #FFF, 974px 987px #FFF, 1886px 1358px #FFF, 1931px 180px #FFF, 1917px 342px #FFF, 1812px 257px #FFF, 1300px 566px #FFF, 395px 1781px #FFF, 1589px 615px #FFF, 1211px 609px #FFF, 935px 1929px #FFF, 1045px 833px #FFF, 398px 1701px #FFF, 957px 1036px #FFF, 341px 30px #FFF, 1407px 1283px #FFF, 183px 1065px #FFF, 1477px 785px #FFF, 1451px 1284px #FFF, 1327px 1481px #FFF, 1192px 1862px #FFF, 797px 154px #FFF, 219px 829px #FFF, 910px 813px #FFF, 684px 1639px #FFF, 1161px 354px #FFF, 927px 1270px #FFF, 1586px 1785px #FFF, 710px 1675px #FFF, 624px 580px #FFF, 1036px 1567px #FFF, 554px 193px #FFF, 84px 1747px #FFF, 894px 1259px #FFF, 18px 213px #FFF, 736px 820px #FFF, 1986px 1224px #FFF, 904px 297px #FFF, 416px 820px #FFF, 949px 326px #FFF, 294px 1962px #FFF, 1214px 1023px #FFF, 708px 1683px #FFF, 1469px 1240px #FFF, 1876px 136px #FFF, 1437px 255px #FFF, 626px 1426px #FFF, 1468px 1969px #FFF, 646px 747px #FFF, 1234px 1869px #FFF, 1945px 1422px #FFF, 1857px 50px #FFF, 935px 693px #FFF, 133px 936px #FFF, 1125px 105px #FFF, 771px 556px #FFF, 1484px 805px #FFF, 1811px 675px #FFF, 1786px 255px #FFF, 1901px 1689px #FFF, 1358px 1876px #FFF, 578px 1484px #FFF;
        }

        #stars2 {
            width: 2px;
            height: 2px;
            background: transparent;
            box-shadow: 1111px 1586px #FFF, 1737px 1004px #FFF, 457px 914px #FFF, 286px 40px #FFF, 920px 1293px #FFF, 1048px 1251px #FFF, 1962px 957px #FFF, 323px 1333px #FFF, 1263px 137px #FFF, 1739px 1794px #FFF, 1560px 1979px #FFF, 1213px 1410px #FFF, 992px 1528px #FFF, 633px 1149px #FFF, 1575px 884px #FFF, 1483px 1930px #FFF, 1617px 1835px #FFF, 1606px 1008px #FFF, 1197px 602px #FFF, 1637px 928px #FFF, 1424px 1052px #FFF, 347px 1105px #FFF, 489px 1037px #FFF, 1343px 676px #FFF, 1792px 1202px #FFF, 1787px 862px #FFF, 1359px 32px #FFF, 514px 1818px #FFF, 945px 815px #FFF, 1418px 1982px #FFF, 261px 1718px #FFF, 1493px 1012px #FFF, 1810px 602px #FFF, 286px 1059px #FFF, 1718px 791px #FFF, 1054px 1609px #FFF, 1660px 815px #FFF, 628px 205px #FFF, 772px 69px #FFF, 1570px 16px #FFF, 578px 1081px #FFF, 552px 108px #FFF, 1142px 748px #FFF, 1781px 1495px #FFF, 1067px 988px #FFF, 449px 1310px #FFF, 234px 1466px #FFF, 854px 797px #FFF, 1286px 183px #FFF, 669px 955px #FFF, 1361px 1204px #FFF, 903px 1398px #FFF, 168px 431px #FFF, 1745px 634px #FFF, 1581px 1592px #FFF, 1141px 1px #FFF, 349px 1835px #FFF, 1130px 1204px #FFF, 882px 566px #FFF, 1243px 1672px #FFF, 673px 1756px #FFF, 630px 693px #FFF, 75px 1714px #FFF, 1301px 1935px #FFF, 1443px 1606px #FFF, 1872px 1351px #FFF, 22px 276px #FFF, 1422px 387px #FFF, 496px 873px #FFF, 1563px 1558px #FFF, 108px 1250px #FFF, 365px 70px #FFF, 455px 1288px #FFF, 1228px 69px #FFF, 1520px 1258px #FFF, 27px 1276px #FFF, 841px 1323px #FFF, 1585px 475px #FFF, 1860px 1322px #FFF, 1405px 377px #FFF, 791px 396px #FFF, 894px 1474px #FFF, 1610px 951px #FFF, 311px 497px #FFF, 1384px 756px #FFF, 269px 483px #FFF, 1793px 1243px #FFF, 412px 1312px #FFF, 316px 398px #FFF, 469px 1887px #FFF, 99px 256px #FFF, 1248px 1866px #FFF, 862px 1561px #FFF, 1645px 619px #FFF, 1585px 853px #FFF, 406px 1482px #FFF, 1964px 1637px #FFF, 685px 852px #FFF, 1754px 1762px #FFF, 1283px 1940px #FFF, 1006px 189px #FFF, 1493px 205px #FFF, 950px 1855px #FFF, 879px 1268px #FFF, 565px 285px #FFF, 399px 133px #FFF, 212px 1658px #FFF, 598px 666px #FFF, 1696px 224px #FFF, 1825px 142px #FFF, 385px 1981px #FFF, 1037px 1276px #FFF, 1482px 621px #FFF, 186px 900px #FFF, 1266px 1257px #FFF, 22px 1284px #FFF, 1967px 688px #FFF, 941px 97px #FFF, 925px 1750px #FFF, 1618px 609px #FFF, 1260px 823px #FFF, 850px 861px #FFF, 210px 1828px #FFF, 876px 1429px #FFF, 1997px 1782px #FFF, 788px 960px #FFF, 1269px 952px #FFF, 1420px 574px #FFF, 909px 1311px #FFF, 31px 1701px #FFF, 661px 1779px #FFF, 1130px 1393px #FFF, 696px 1183px #FFF, 749px 990px #FFF, 1455px 959px #FFF, 348px 204px #FFF, 565px 1640px #FFF, 1199px 582px #FFF, 1884px 1036px #FFF, 438px 1645px #FFF, 1941px 27px #FFF, 441px 1053px #FFF, 1042px 938px #FFF, 75px 871px #FFF, 616px 1776px #FFF, 74px 1981px #FFF, 1954px 801px #FFF, 1956px 96px #FFF, 1247px 1415px #FFF, 1242px 644px #FFF, 507px 1531px #FFF, 1613px 1078px #FFF, 1323px 942px #FFF, 1668px 1262px #FFF, 836px 1315px #FFF, 1587px 846px #FFF, 10px 406px #FFF, 750px 1855px #FFF, 232px 351px #FFF, 376px 1304px #FFF, 1097px 343px #FFF, 628px 1615px #FFF, 1471px 1454px #FFF, 1645px 1729px #FFF, 301px 346px #FFF, 1882px 160px #FFF, 221px 532px #FFF, 214px 292px #FFF, 248px 5px #FFF, 1925px 285px #FFF, 1334px 800px #FFF, 297px 205px #FFF, 1196px 1192px #FFF, 1872px 739px #FFF, 1256px 370px #FFF, 1701px 634px #FFF, 1935px 729px #FFF, 1155px 683px #FFF, 582px 497px #FFF, 246px 1998px #FFF, 812px 581px #FFF, 318px 854px #FFF, 526px 1888px #FFF, 849px 906px #FFF, 205px 1440px #FFF, 368px 1209px #FFF, 1947px 1273px #FFF, 1112px 1157px #FFF, 1432px 1939px #FFF, 1650px 513px #FFF, 492px 1727px #FFF, 1533px 903px #FFF, 232px 1405px #FFF, 885px 1442px #FFF, 368px 803px #FFF, 1158px 1541px #FFF, 1223px 1256px #FFF, 1548px 1860px #FFF, 1224px 287px #FFF, 1889px 77px #FFF;
            animation: animStar 100s linear infinite;
        }

        #stars2:after {
            content: " ";
            position: absolute;
            top: 2000px;
            width: 2px;
            height: 2px;
            background: transparent;
            box-shadow: 1111px 1586px #FFF, 1737px 1004px #FFF, 457px 914px #FFF, 286px 40px #FFF, 920px 1293px #FFF, 1048px 1251px #FFF, 1962px 957px #FFF, 323px 1333px #FFF, 1263px 137px #FFF, 1739px 1794px #FFF, 1560px 1979px #FFF, 1213px 1410px #FFF, 992px 1528px #FFF, 633px 1149px #FFF, 1575px 884px #FFF, 1483px 1930px #FFF, 1617px 1835px #FFF, 1606px 1008px #FFF, 1197px 602px #FFF, 1637px 928px #FFF, 1424px 1052px #FFF, 347px 1105px #FFF, 489px 1037px #FFF, 1343px 676px #FFF, 1792px 1202px #FFF, 1787px 862px #FFF, 1359px 32px #FFF, 514px 1818px #FFF, 945px 815px #FFF, 1418px 1982px #FFF, 261px 1718px #FFF, 1493px 1012px #FFF, 1810px 602px #FFF, 286px 1059px #FFF, 1718px 791px #FFF, 1054px 1609px #FFF, 1660px 815px #FFF, 628px 205px #FFF, 772px 69px #FFF, 1570px 16px #FFF, 578px 1081px #FFF, 552px 108px #FFF, 1142px 748px #FFF, 1781px 1495px #FFF, 1067px 988px #FFF, 449px 1310px #FFF, 234px 1466px #FFF, 854px 797px #FFF, 1286px 183px #FFF, 669px 955px #FFF, 1361px 1204px #FFF, 903px 1398px #FFF, 168px 431px #FFF, 1745px 634px #FFF, 1581px 1592px #FFF, 1141px 1px #FFF, 349px 1835px #FFF, 1130px 1204px #FFF, 882px 566px #FFF, 1243px 1672px #FFF, 673px 1756px #FFF, 630px 693px #FFF, 75px 1714px #FFF, 1301px 1935px #FFF, 1443px 1606px #FFF, 1872px 1351px #FFF, 22px 276px #FFF, 1422px 387px #FFF, 496px 873px #FFF, 1563px 1558px #FFF, 108px 1250px #FFF, 365px 70px #FFF, 455px 1288px #FFF, 1228px 69px #FFF, 1520px 1258px #FFF, 27px 1276px #FFF, 841px 1323px #FFF, 1585px 475px #FFF, 1860px 1322px #FFF, 1405px 377px #FFF, 791px 396px #FFF, 894px 1474px #FFF, 1610px 951px #FFF, 311px 497px #FFF, 1384px 756px #FFF, 269px 483px #FFF, 1793px 1243px #FFF, 412px 1312px #FFF, 316px 398px #FFF, 469px 1887px #FFF, 99px 256px #FFF, 1248px 1866px #FFF, 862px 1561px #FFF, 1645px 619px #FFF, 1585px 853px #FFF, 406px 1482px #FFF, 1964px 1637px #FFF, 685px 852px #FFF, 1754px 1762px #FFF, 1283px 1940px #FFF, 1006px 189px #FFF, 1493px 205px #FFF, 950px 1855px #FFF, 879px 1268px #FFF, 565px 285px #FFF, 399px 133px #FFF, 212px 1658px #FFF, 598px 666px #FFF, 1696px 224px #FFF, 1825px 142px #FFF, 385px 1981px #FFF, 1037px 1276px #FFF, 1482px 621px #FFF, 186px 900px #FFF, 1266px 1257px #FFF, 22px 1284px #FFF, 1967px 688px #FFF, 941px 97px #FFF, 925px 1750px #FFF, 1618px 609px #FFF, 1260px 823px #FFF, 850px 861px #FFF, 210px 1828px #FFF, 876px 1429px #FFF, 1997px 1782px #FFF, 788px 960px #FFF, 1269px 952px #FFF, 1420px 574px #FFF, 909px 1311px #FFF, 31px 1701px #FFF, 661px 1779px #FFF, 1130px 1393px #FFF, 696px 1183px #FFF, 749px 990px #FFF, 1455px 959px #FFF, 348px 204px #FFF, 565px 1640px #FFF, 1199px 582px #FFF, 1884px 1036px #FFF, 438px 1645px #FFF, 1941px 27px #FFF, 441px 1053px #FFF, 1042px 938px #FFF, 75px 871px #FFF, 616px 1776px #FFF, 74px 1981px #FFF, 1954px 801px #FFF, 1956px 96px #FFF, 1247px 1415px #FFF, 1242px 644px #FFF, 507px 1531px #FFF, 1613px 1078px #FFF, 1323px 942px #FFF, 1668px 1262px #FFF, 836px 1315px #FFF, 1587px 846px #FFF, 10px 406px #FFF, 750px 1855px #FFF, 232px 351px #FFF, 376px 1304px #FFF, 1097px 343px #FFF, 628px 1615px #FFF, 1471px 1454px #FFF, 1645px 1729px #FFF, 301px 346px #FFF, 1882px 160px #FFF, 221px 532px #FFF, 214px 292px #FFF, 248px 5px #FFF, 1925px 285px #FFF, 1334px 800px #FFF, 297px 205px #FFF, 1196px 1192px #FFF, 1872px 739px #FFF, 1256px 370px #FFF, 1701px 634px #FFF, 1935px 729px #FFF, 1155px 683px #FFF, 582px 497px #FFF, 246px 1998px #FFF, 812px 581px #FFF, 318px 854px #FFF, 526px 1888px #FFF, 849px 906px #FFF, 205px 1440px #FFF, 368px 1209px #FFF, 1947px 1273px #FFF, 1112px 1157px #FFF, 1432px 1939px #FFF, 1650px 513px #FFF, 492px 1727px #FFF, 1533px 903px #FFF, 232px 1405px #FFF, 885px 1442px #FFF, 368px 803px #FFF, 1158px 1541px #FFF, 1223px 1256px #FFF, 1548px 1860px #FFF, 1224px 287px #FFF, 1889px 77px #FFF;
        }

        #stars3 {
            width: 3px;
            height: 3px;
            background: transparent;
            box-shadow: 1634px 56px #FFF, 1997px 1179px #FFF, 1592px 1796px #FFF, 78px 178px #FFF, 1406px 1981px #FFF, 1482px 1920px #FFF, 512px 987px #FFF, 1558px 106px #FFF, 1118px 648px #FFF, 41px 1819px #FFF, 1392px 1682px #FFF, 1482px 987px #FFF, 1040px 766px #FFF, 1354px 279px #FFF, 1964px 1751px #FFF, 1126px 1604px #FFF, 1126px 1171px #FFF, 165px 1818px #FFF, 1854px 585px #FFF, 890px 1790px #FFF, 321px 1247px #FFF, 1119px 919px #FFF, 117px 1657px #FFF, 281px 1703px #FFF, 409px 1653px #FFF, 682px 1397px #FFF, 337px 1575px #FFF, 1798px 215px #FFF, 289px 395px #FFF, 413px 1017px #FFF, 451px 1541px #FFF, 1232px 1298px #FFF, 572px 1575px #FFF, 184px 148px #FFF, 325px 1259px #FFF, 1033px 372px #FFF, 763px 945px #FFF, 1992px 581px #FFF, 1417px 1518px #FFF, 772px 997px #FFF, 1549px 1138px #FFF, 664px 725px #FFF, 809px 622px #FFF, 810px 1851px #FFF, 1029px 527px #FFF, 1264px 813px #FFF, 1161px 1598px #FFF, 1269px 282px #FFF, 1648px 148px #FFF, 1308px 10px #FFF, 1689px 459px #FFF, 299px 176px #FFF, 1333px 387px #FFF, 1126px 283px #FFF, 308px 1069px #FFF, 348px 861px #FFF, 1975px 1449px #FFF, 449px 1016px #FFF, 1657px 649px #FFF, 1457px 1352px #FFF, 1462px 271px #FFF, 508px 527px #FFF, 1911px 1679px #FFF, 1803px 1032px #FFF, 251px 1287px #FFF, 1239px 1000px #FFF, 52px 1060px #FFF, 1204px 189px #FFF, 399px 1645px #FFF, 1743px 108px #FFF, 1737px 827px #FFF, 791px 1637px #FFF, 135px 1726px #FFF, 1113px 216px #FFF, 359px 66px #FFF, 1796px 701px #FFF, 359px 787px #FFF, 1656px 1020px #FFF, 655px 630px #FFF, 566px 567px #FFF, 55px 1453px #FFF, 779px 1855px #FFF, 1370px 902px #FFF, 1767px 262px #FFF, 324px 1671px #FFF, 377px 370px #FFF, 1708px 627px #FFF, 1897px 563px #FFF, 474px 30px #FFF, 618px 1862px #FFF, 1375px 1038px #FFF, 994px 1100px #FFF, 288px 1730px #FFF, 596px 52px #FFF, 663px 970px #FFF, 969px 1626px #FFF, 800px 815px #FFF, 1839px 1606px #FFF, 924px 887px #FFF, 992px 692px #FFF;
            animation: animStar 150s linear infinite;
        }

        #stars3:after {
            content: " ";
            position: absolute;
            top: 2000px;
            width: 3px;
            height: 3px;
            background: transparent;
            box-shadow: 1634px 56px #FFF, 1997px 1179px #FFF, 1592px 1796px #FFF, 78px 178px #FFF, 1406px 1981px #FFF, 1482px 1920px #FFF, 512px 987px #FFF, 1558px 106px #FFF, 1118px 648px #FFF, 41px 1819px #FFF, 1392px 1682px #FFF, 1482px 987px #FFF, 1040px 766px #FFF, 1354px 279px #FFF, 1964px 1751px #FFF, 1126px 1604px #FFF, 1126px 1171px #FFF, 165px 1818px #FFF, 1854px 585px #FFF, 890px 1790px #FFF, 321px 1247px #FFF, 1119px 919px #FFF, 117px 1657px #FFF, 281px 1703px #FFF, 409px 1653px #FFF, 682px 1397px #FFF, 337px 1575px #FFF, 1798px 215px #FFF, 289px 395px #FFF, 413px 1017px #FFF, 451px 1541px #FFF, 1232px 1298px #FFF, 572px 1575px #FFF, 184px 148px #FFF, 325px 1259px #FFF, 1033px 372px #FFF, 763px 945px #FFF, 1992px 581px #FFF, 1417px 1518px #FFF, 772px 997px #FFF, 1549px 1138px #FFF, 664px 725px #FFF, 809px 622px #FFF, 810px 1851px #FFF, 1029px 527px #FFF, 1264px 813px #FFF, 1161px 1598px #FFF, 1269px 282px #FFF, 1648px 148px #FFF, 1308px 10px #FFF, 1689px 459px #FFF, 299px 176px #FFF, 1333px 387px #FFF, 1126px 283px #FFF, 308px 1069px #FFF, 348px 861px #FFF, 1975px 1449px #FFF, 449px 1016px #FFF, 1657px 649px #FFF, 1457px 1352px #FFF, 1462px 271px #FFF, 508px 527px #FFF, 1911px 1679px #FFF, 1803px 1032px #FFF, 251px 1287px #FFF, 1239px 1000px #FFF, 52px 1060px #FFF, 1204px 189px #FFF, 399px 1645px #FFF, 1743px 108px #FFF, 1737px 827px #FFF, 791px 1637px #FFF, 135px 1726px #FFF, 1113px 216px #FFF, 359px 66px #FFF, 1796px 701px #FFF, 359px 787px #FFF, 1656px 1020px #FFF, 655px 630px #FFF, 566px 567px #FFF, 55px 1453px #FFF, 779px 1855px #FFF, 1370px 902px #FFF, 1767px 262px #FFF, 324px 1671px #FFF, 377px 370px #FFF, 1708px 627px #FFF, 1897px 563px #FFF, 474px 30px #FFF, 618px 1862px #FFF, 1375px 1038px #FFF, 994px 1100px #FFF, 288px 1730px #FFF, 596px 52px #FFF, 663px 970px #FFF, 969px 1626px #FFF, 800px 815px #FFF, 1839px 1606px #FFF, 924px 887px #FFF, 992px 692px #FFF;
        }

        @keyframes animStar {
            from {
                transform: translateY(0px);
            }

            to {
                transform: translateY(-2000px);
            }
        }
    </style>
@endpush

@section('content')
    <section class="page-title"
        style="background: radial-gradient(ellipse at bottom, #1b2735 0%, #090a0f 100%);
    overflow: hidden;">
        <div id='stars'></div>
        <div id='stars2'></div>
        <div id='stars3'></div>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="block">
                        <h1>About Our Company</h1>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="about section">
        <div class="container">
            <div class="row">
                <div class="col-md-7">
                    <div class="block">
                        <div class="section-title">
                            <h2>Your Partner for
                                Network Solution</h2>
                            <p>SNS Founded in 2023, we have earning experience, continued success and a well-satisfied
                                clientele. We are powered by highly skilled professionals, across various domains, whose
                                experience can transform organizations.</p>
                        </div>
                        <p>Star Network Solutions (SNS) is formed by passionate, tech-enthusiast and hardworking key people
                            who dreamt of helping people
                            and other businesses by adding technology-driven value to their services. We combine our
                            knowledge and experience along with our expertise of latest innovative tech-solutions to provide
                            better and sustainable business outcomes for our customers and their stakeholders.</p>
                    </div>
                </div><!-- .col-md-7 close -->
                <div class="col-md-5">
                    <div class="block">
                        <img src="{{ asset('assets') }}/images/web/about-1.png" alt="Img">
                    </div>
                </div><!-- .col-md-5 close -->
            </div>
        </div>
    </section>
    <!-- Wrapper Start -->
    <section class="about section">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-lg-12 col-sm-12">
                    <div class="block">
                        <div class="section-title">
                            <h2 class="text-center">Our Team Strength</h2>
                            <div class="text-center">
                                <div class="d-inline-block mx-2 line"></div>
                                <i class="icon ion-star text-warning"></i>
                                <div class="d-inline-block mx-2 line"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center" style="padding: 0 5vw;">
                <div class="col-md-12 col-lg-12 col-sm-12 mt-5">
                    <ul>
                        <li class="list-group-item">Experienced Management from Associated Technology Domain</li>
                        <li class="list-group-item">Cisco Professional Level Certified Resources</li>
                        <li class="list-group-item">Fortinet NSE Certified Resources</li>
                        <li class="list-group-item">Data Center Certified Resources</li>
                        <li class="list-group-item">Experienced Project Management Professional</li>
                        <li class="list-group-item">Dell Certified Resources for Server & Storage Domain</li>
                        <li class="list-group-item">Experienced Resources on Modular DC</li>
                        <li class="list-group-item">Certified Structured Cabling Professional</li>
                        <li class="list-group-item">10+ Experienced Technical & Technicians Team</li>
                        <li class="list-group-item">Experienced Supply Chain Professionals to Ensure Project Smoothness</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <section class="about section">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-6 col-lg-6 col-sm-12">
                    <div class="block mb-3">
                        <div class="section-title">
                            <h2 class="text-center">Our Mission</h2>
                            <div class="text-center">
                                <div class="d-inline-block mx-2 line"></div>
                                <i class="icon ion-star text-warning"></i>
                                <div class="d-inline-block mx-2 line"></div>
                            </div>
                        </div>
                    </div>
                    <div style="padding: 0 5vw">
                        <p>Our mission is to create sustainable and gainful business models to serve our customers. Our core
                            value is maintaining “5S Operation Model” (Support, Strength, Standardization, Sustainability
                            and Success) where we Support our stakeholders to increase their Strength for building
                            Standardized & Sustainable solutions for all of our stakeholders to ascend them to Success.</p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-6 col-sm-12">
                    <div class="block mb-3">
                        <div class="section-title">
                            <h2 class="text-center">Our Vision</h2>
                            <div class="text-center">
                                <div class="d-inline-block mx-2 line"></div>
                                <i class="icon ion-star text-warning"></i>
                                <div class="d-inline-block mx-2 line"></div>
                            </div>
                        </div>
                    </div>
                    <div style="padding: 0 5vw">
                        <p>Our vision is to become one of the top business leaders in terms of providing sustainable
                            technology-based advanced solutions to our customers.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="about section">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-lg-12 col-sm-12">
                    <div class="block">
                        <div class="section-title">
                            <h2 class="text-center">What We Do</h2>
                            <div class="text-center">
                                <div class="d-inline-block mx-2 line"></div>
                                <i class="icon ion-star text-warning"></i>
                                <div class="d-inline-block mx-2 line"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center" style="padding: 0 5vw;">
                <div class="col-md-6 col-lg-6 col-sm-12 mt-5">
                    <h3>IT SOLUTIONS</h3>
                    <ul>
                        <li><i class="icon ion-checkmark mr-2"></i>IT Security</li>
                        <li><i class="icon ion-checkmark mr-2"></i>Networking</li>
                        <li><i class="icon ion-checkmark mr-2"></i>Backup & Storage</li>
                        <li><i class="icon ion-checkmark mr-2"></i>Server & Virtualization</li>
                    </ul>
                </div>
                <div class="col-md-6 col-lg-6 col-sm-12 mt-5">
                    <h3>IT CONSULTANCY</h3>
                    <p>We partner with our customers to simplify, develop and transform the services supporting their
                        businesses. We ensure the best levels of expert advisory and technical knowledge through a deep-set
                        commitment, comprehensive industry expertise.</p>
                </div>
            </div>
        </div>
    </section>

    <section class="about section">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-lg-12 col-sm-12">
                    <div class="block">
                        <div class="section-title">
                            <h2 class="text-center">IT Consultancy</h2>
                            <div class="text-center">
                                <div class="d-inline-block mx-2 line"></div>
                                <i class="icon ion-star text-warning"></i>
                                <div class="d-inline-block mx-2 line"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center" style="padding: 0 5vw;">
                <div class="col-md-6 col-lg-6 col-sm-12 mt-5">
                    <h3>Our Approach</h3>
                    <ul>
                        <li><i class="icon ion-checkmark mr-2"></i>We take the time to understand your needs carefully
                            analyzing where our partners are right now and where they want to be in the future.</li>
                        <li><i class="icon ion-checkmark mr-2"></i>We help our partner to identify improvements that can be
                            made and we quantify the benefits to them of making those improvements.</li>
                        <li><i class="icon ion-checkmark mr-2"></i>We work with our partner to implement the agreed
                            solutions. We are not here to tell them what to do but we will be the catalyst that will help
                            them grow and make the changes they want to make.</li>
                    </ul>
                </div>
                <div class="col-md-6 col-lg-6 col-sm-12 mt-5">
                    <h3>Our Services</h3>
                    <ul>
                        <li><i class="icon ion-checkmark mr-2"></i>Design and planning Services</li>
                        <li><i class="icon ion-checkmark mr-2"></i>Implementation Services</li>
                        <li><i class="icon ion-checkmark mr-2"></i>Configuration Optimization Services</li>
                        <li><i class="icon ion-checkmark mr-2"></i>Upgrade and Migration Services</li>
                        <li><i class="icon ion-checkmark mr-2"></i>Design Review and Verification Services</li>
                        <li><i class="icon ion-checkmark mr-2"></i>Application Customization Services</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <div class="counter">
        <div class="container">
            <div class="row">
                <div class="col-12 col-lg-12">
                    <h2 class="text-white text-center h2" style="font-weight: 700">We’ve worked with some great companies
                        already. We think you
                        should join them in your quest for top talent.</h2>
                </div>
            </div>
            <div class="row mt-3">
                <div class="col-12 col-lg-4">
                    <div class="count-up">
                        <p class="counter-count"><span class="display-3" style="font-weight: 900">70</span> +</p>
                        <h2 class="text-white" style="font-weight: 700">Our Cilents</h2>
                    </div>
                </div>
                <div class="col-12 col-lg-4">
                    <div class="count-up">
                        <p class="counter-count"><span class="display-3" style="font-weight: 900">50</span> +</p>
                        <h2 class="text-white" style="font-weight: 700">Brands</h2>
                    </div>
                </div>
                <div class="col-12 col-lg-4">
                    <div class="count-up">
                        <p class="counter-count"><span class="display-3" style="font-weight: 900">365</span> +</p>
                        <h2 class="text-white" style="font-weight: 700">Our service Day/Year</h2>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <section class="section-allience">
        <h2 class="text-center pt-4 text-underline font-weight-bold h2" style="text-decoration: underline;">Our Alliance
            Product</h2>
        <div class="wrapper">
            <div class="track">
                <div class="logo">
                    <img src="{{ asset('assets/images/Web/slide-allience/2.png') }}" />
                </div>
                <div class="logo">
                    <img src="{{ asset('assets/images/Web/slide-allience/3.png') }}" />
                </div>
                <div class="logo">
                    <img src="{{ asset('assets/images/Web/slide-allience/4.png') }}" />
                </div>
                <div class="logo">
                    <img src="{{ asset('assets/images/Web/slide-allience/5.png') }}" />
                </div>
                <div class="logo">
                    <img src="{{ asset('assets/images/Web/slide-allience/6.png') }}" />
                </div>
                <div class="logo">
                    <img src="{{ asset('assets/images/Web/slide-allience/7.png') }}" />
                </div>
                <div class="logo">
                    <img src="{{ asset('assets/images/Web/slide-allience/8.png') }}" />
                </div>
                <div class="logo">
                    <img src="{{ asset('assets/images/Web/slide-allience/9.png') }}" />
                </div>
                <div class="logo">
                    <img src="{{ asset('assets/images/Web/slide-allience/10.png') }}" />
                </div>
                <div class="logo">
                    <img src="{{ asset('assets/images/Web/slide-allience/11.png') }}" />
                </div>
                <div class="logo">
                    <img src="{{ asset('assets/images/Web/slide-allience/12.png') }}" />
                </div>
                <div class="logo">
                    <img src="{{ asset('assets/images/Web/slide-allience/13.png') }}" />
                </div>
                <div class="logo">
                    <img src="{{ asset('assets/images/Web/slide-allience/14.png') }}" />
                </div>
                <div class="logo">
                    <img src="{{ asset('assets/images/Web/slide-allience/15.png') }}" />
                </div>
                <div class="logo">
                    <img src="{{ asset('assets/images/Web/slide-allience/16.png') }}" />
                </div>
                <div class="logo">
                    <img src="{{ asset('assets/images/Web/slide-allience/18.png') }}" />
                </div>
            </div>
        </div>
    </section>

    <section class="about section">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-lg-12 col-sm-12">
                    <div class="block">
                        <div class="section-title">
                            <h2 class="text-center">Why Choose Us</h2>
                            <div class="text-center">
                                <div class="d-inline-block mx-2 line"></div>
                                <i class="icon ion-star text-warning"></i>
                                <div class="d-inline-block mx-2 line"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center" style="padding: 0 5vw;">
                <div class="col-md-12 col-lg-12 col-sm-12 mt-5">
                    <ul>
                        <li class="list-group-item">Strategic partner and trusted adviser</li>
                        <li class="list-group-item">Value for money</li>
                        <li class="list-group-item">Proactive resolution to issues</li>
                        <li class="list-group-item">Small enough to care, large enough to deliver excellence</li>
                        <li class="list-group-item">Adding value, not complication</li>
                        <li class="list-group-item">An accessible team</li>
                        <li class="list-group-item">Ensuring a smooth transition</li>
                        <li class="list-group-item">Specialists to provide you the extra knowledge</li>
                        <li class="list-group-item">Clear communication</li>
                        <li class="list-group-item">The utmost accountability and commitment</li>
                        <li class="list-group-item">Projects completed on time and within budget</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

@endsection

@push('js')
    <script>
        $('.counter-count span').each(function() {
            $(this).prop('Counter', 0).animate({
                Counter: $(this).text()
            }, {

                //chnage count up speed here
                duration: 4000,
                easing: 'swing',
                step: function(now) {
                    $(this).text(Math.ceil(now));
                }
            });
        });
    </script>
@endpush
