<!-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>漂亮的表格</title>
    <style>
        .biaoti{
            font-family: "Microsoft Himalaya";
            font-size: 26px;
            border-bottom:1px dashed #CCCCCC;
            color: #255e95;

        }

        .btgn{
            font-family: "Microsoft YaHei UI";
            font-size: 16px;
            color: #255e95;
            background-color: #e9faff;
            text-align: center;
        }
    </style>
</head>
<body> -->
@extends('server_pages.index')

@section('content')
    <table width="80%" border="0">
        <tr>
            <td align="center" class="biaoti" height="60">实时锅炉数据表</td>
        </tr>
        <!-- <tr>
            <td align="right" height="25">2017-01-02---2017-05-02</td>
        </tr> -->
    </table>

    <table width="80%" border="1" cellspacing="1" cellpadding="4">
        <tr>
            <td colspan="1" class="btgn" rowspan="2">锅炉ID</td>
            <td colspan="2" class="btgn">流量积数</td>
            <td colspan="3" class="btgn">汽水系统</td>
            <td colspan="3" class="btgn">电动设备系统</td>
            <td colspan="2" class="btgn">烟风系统</td>
            <td colspan="2" class="btgn">除氧系统</td>
            <td colspan="1" class="btgn" rowspan="2">更新时间</td>
        </tr>

        <tr>
            <td class="btgn">给水流量   </td>
            <td class="btgn">给煤积数   </td>
            <td class="btgn">蒸汽压力   </td>
            <td class="btgn">蒸汽压力   </td>
            <td class="btgn">气泡水位   </td>
            <td class="btgn">鼓风电流   </td>
            <td class="btgn">引风电流   </td>
            <td class="btgn">软水泵电流 </td>
            <td class="btgn">烟风压力   </td>
            <td class="btgn">烟风温度   </td>
            <td class="btgn">除氧器液位 </td>
            <td class="btgn">除氧器压力 </td>
        </tr>

        @foreach($Boilers as $Boiler)
            <tr>
                <td>{{$Boiler -> id}}</td>
                <td>{{$Boiler -> waterOfFlow}}</td>
                <td>{{$Boiler -> coalOfFlow}}</td>
                <td>{{$Boiler -> pressureOfSteam}}</td>
                <td>{{$Boiler -> temperatureOfSteam}}</td>
                <td>{{$Boiler -> waterLevelOfSteam}}</td>
                <td>{{$Boiler -> windOfElectricity}}</td>
                <td>{{$Boiler -> driveWindOfElectricity}}</td>
                <td>{{$Boiler -> pumpOfElectricity}}</td>
                <td>{{$Boiler -> pressureOfWind}}</td>
                <td>{{$Boiler -> temperatureOfWind}}</td>
                <td>{{$Boiler -> oxygenOfLevel}}</td>
                <td>{{$Boiler -> oxygenOfPressure}}</td>
                <td>{{$Boiler -> updated_at}}</td>
            </tr>
        @endforeach
    </table>
    @endsection
<!-- </body>
</html> -->