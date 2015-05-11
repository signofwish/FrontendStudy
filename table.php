<!doctype html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <style>
        table {
            border-collapse: collapse;
            word-break: break-all;
        }
        th, td {
            padding: 0.5em;
            border: 1px solid #ddd;
            vertical-align: top;
        }
        .tr:nth-child(2n+1) {
            background-color: #eee;
        }
        .lede * {
            vertical-align: middle;
        }
    </style>
</head>
<body>
<table>

    <p class="lede">
        <img src="images/go.png" alt="cat" /> 이것은 고양이입니다.
    </p>
    <p>
        <img src="images/go.png" alt="cat" /> 이것은 고양이입니다.
    </p>

    <colgroup>
        <col style="width: 100px"/>
        <col style="width: 50px"/>
        <col style="width: 30px"/>
        <col style="width: 50px"/>
        <col style="width: 200px"/>
    </colgroup>
    <thead>
    <tr class="tr">
        <th scope="col">1</th>
        <th scope="col">2</th>
        <th scope="col">3</th>
        <th scope="col">4</th>
        <th scope="col">5</th>
    </tr>
    </thead>
    <tbody>
    <tr class="tr">
        <td>1000,000,000,000,000,000,000</td>
        <td>c</td>
        <td>d</td>
        <td>e</td>
        <td>f</td>
    </tr>
    <tr class="tr">
        <td>g</td>
        <td>fd</td>
        <td>d</td>
        <td>f</td>
        <td>hg</td>
    </tr>
    <tr class="tr">
        <td>t</td>
        <td>er</td>
        <td>e</td>
        <td>e</td>
        <td>fg</td>
    </tr>
    <tr class="tr">
        <td>d</td>
        <td>g</td>
        <td>a</td>
        <td>a</td>
        <td>ds</td>
    </tr>
    <tr class="tr">
        <td>f</td>
        <td>sa</td>
        <td></td>
        <td>ads</td>
        <td>g</td>
    </tr>
    </tbody>
    <tfoot>
    <tr class="tr">
        <th nowrap scope="row">합계</th>
        <td nowrap>10</td>
        <td nowrap>20</td>
        <td nowrap>30</td>
        <td nowrap>40</td>
    </tr>
    </tfoot>
    <caption>표1. 예제 표</caption>
</table>
</body>
</html>