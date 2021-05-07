/**
 *  Document   : calendar.js
 *  Author     : redstar
 *  Description: Script for calendar data
 *
 **/
var AppCalendar = function() {
    return {
        init: function() {
            this.initCalendar()
        },
        initCalendar: function() {
            if (jQuery().fullCalendar) {
                var e = new Date,
                    t = e.getDate(),
                    a = e.getMonth(),
                    n = e.getFullYear(),
                    r = {};
                $("#calendar").removeClass("mobile"), r = {
                    left: "prev,next,today",
                    center: "title",
                    right: "month,agendaWeek,agendaDay"
                };
                var l = function(e) {
                        var t = {
                            title: $.trim(e.text())
                        };
                        e.data("eventObject", t), e.draggable({
                            zIndex: 999,
                            revert: !0,
                            revertDuration: 0
                        })
                    },
                    o = function(e) {
                        e = 0 === e.length ? "Untitled Event" : e;
                       /* var t = $('<div class="external-event label label-event">' + e + "</div>");*/
                        var t = $('<div class="external-event label label-event-' +e+'">' + e + "</div>");
                        jQuery("#event_box").append(t), l(t)
                    };
                $("#external-events div.external-event").each(function() {
                    l($(this))
                }), $("#event_add").unbind("click").click(function() {
                    var e = $("#event_title").val();
                    o(e)
                }), $("#event_box").html(""), o("holiday"), o("birthday"), o("meeting"), o("competition"), o("dinner"), o("party"), $("#calendar").fullCalendar("destroy"), $("#calendar").fullCalendar({
                    header: r,
                    defaultView: "month",
                    slotMinutes: 15,
                    editable: !0,
                    droppable: !0,
                    drop: function(e, t) {
                        var a = $(this).data("eventObject"),
                            n = $.extend({}, a);
                        n.start = e, n.allDay = t, n.className = $(this).attr("data-class"), $("#calendar").fullCalendar("renderEvent", n, !0), $("#drop-remove").is(":checked") && $(this).remove()
                    },
                   
                    /***** events ********/
                    events: [{
                        title: "Annual Day",
                        start: new Date(n, a, t-5, 0, 0),
                        end: new Date(n, a, t-2, 0, 0),
                        backgroundColor: "#00FFFF"
                    }, {
                        title: "Sports Event",
                        start: new Date(n, a, t-10, 9, 0),
                        end: new Date(n, a, t-8, 0, 0),
                        backgroundColor: "#F3565D"
                    }, {
                        title: "Repeating Event",
                        start: new Date(n, a, t +5, 16, 0),
                        allDay: !1,
                        backgroundColor: "#1bbc9b"
                    }, {
                        title: "Meeting",
                        start: new Date(n, a, t, 10, 30),
                        allDay: !1
                    }, {
                        title: "Result Day",
                        start: new Date(n, a, t + 7, 19, 0),
                        end: new Date(n, a, t + 1, 22, 30),
                        backgroundColor: "#DC35A9",
                        allDay: !1
                    }, {
                        title: "Click for Google",
                        start: new Date(n, a, 29),
                        end: new Date(n, a, 30),
                        backgroundColor: "#9b59b6",
                        url: "http://google.com/"
                    }]
                })
            }
        }
    }
}();
jQuery(document).ready(function() {
	'use strict';
    AppCalendar.init()
});
"use strict";
$(function () {
  barChart();
  barChartWithImg();
  lineChart();
  donutChart();
  pieChart();
  gaugeChart();
  radialLineChart();
  dumbbellPlotChart();
  mapBubble();
});

function barChart() {
  // Themes begin
  am4core.useTheme(am4themes_animated);
  // Themes end

  // Create chart instance
  var chart = am4core.create("barChart", am4charts.XYChart);
  chart.scrollbarX = new am4core.Scrollbar();

  // Add data
  chart.data = [
    {
      country: "USA",
      visits: 3025,
    },
    {
      country: "China",
      visits: 1882,
    },
    {
      country: "Japan",
      visits: 1809,
    },
    {
      country: "Germany",
      visits: 1322,
    },
    {
      country: "UK",
      visits: 1122,
    },
    {
      country: "France",
      visits: 1114,
    },
    {
      country: "India",
      visits: 984,
    },
    {
      country: "Spain",
      visits: 711,
    },
    {
      country: "Netherlands",
      visits: 665,
    },
    {
      country: "Russia",
      visits: 580,
    },
    {
      country: "South Korea",
      visits: 443,
    },
    {
      country: "Canada",
      visits: 441,
    },
  ];

  // Create axes
  var categoryAxis = chart.xAxes.push(new am4charts.CategoryAxis());
  categoryAxis.dataFields.category = "country";
  categoryAxis.renderer.grid.template.location = 0;
  categoryAxis.renderer.minGridDistance = 30;
  categoryAxis.renderer.labels.template.horizontalCenter = "right";
  categoryAxis.renderer.labels.template.verticalCenter = "middle";
  categoryAxis.renderer.labels.template.rotation = 270;
  categoryAxis.tooltip.disabled = true;
  categoryAxis.renderer.minHeight = 110;
  categoryAxis.renderer.labels.template.fill = am4core.color("#9aa0ac");

  var valueAxis = chart.yAxes.push(new am4charts.ValueAxis());
  valueAxis.renderer.minWidth = 50;
  valueAxis.renderer.labels.template.fill = am4core.color("#9aa0ac");

  // Create series
  var series = chart.series.push(new am4charts.ColumnSeries());
  series.sequencedInterpolation = true;
  series.dataFields.valueY = "visits";
  series.dataFields.categoryX = "country";
  series.tooltipText = "[{categoryX}: bold]{valueY}[/]";
  series.columns.template.strokeWidth = 0;

  series.tooltip.pointerOrientation = "vertical";

  series.columns.template.column.cornerRadiusTopLeft = 10;
  series.columns.template.column.cornerRadiusTopRight = 10;
  series.columns.template.column.fillOpacity = 0.8;

  // on hover, make corner radiuses bigger
  let hoverState = series.columns.template.column.states.create("hover");
  hoverState.properties.cornerRadiusTopLeft = 0;
  hoverState.properties.cornerRadiusTopRight = 0;
  hoverState.properties.fillOpacity = 1;

  series.columns.template.adapter.add("fill", (fill, target) => {
    return chart.colors.getIndex(target.dataItem.index);
  });

  // Cursor
  chart.cursor = new am4charts.XYCursor();
}
function barChartWithImg() {
  am4core.ready(function () {
    // Themes begin
    am4core.useTheme(am4themes_animated);
    // Themes end

    var chart = am4core.create("barchart2", am4charts.XYChart);
    chart.colors.step = 2;

    chart.legend = new am4charts.Legend();
    chart.legend.position = "top";
    chart.legend.paddingBottom = 20;
    chart.legend.labels.template.maxWidth = 95;

    var xAxis = chart.xAxes.push(new am4charts.CategoryAxis());
    xAxis.dataFields.category = "category";
    xAxis.renderer.cellStartLocation = 0.1;
    xAxis.renderer.cellEndLocation = 0.9;
    xAxis.renderer.grid.template.location = 0;
    xAxis.renderer.labels.template.fill = am4core.color("#9aa0ac");

    var yAxis = chart.yAxes.push(new am4charts.ValueAxis());
    yAxis.min = 0;
    yAxis.renderer.labels.template.fill = am4core.color("#9aa0ac");

    function createSeries(value, name) {
      var series = chart.series.push(new am4charts.ColumnSeries());
      series.dataFields.valueY = value;
      series.dataFields.categoryX = "category";
      series.name = name;

      series.events.on("hidden", arrangeColumns);
      series.events.on("shown", arrangeColumns);

      var bullet = series.bullets.push(new am4charts.LabelBullet());
      bullet.interactionsEnabled = false;
      bullet.dy = 30;
      bullet.label.text = "{valueY}";
      bullet.label.fill = am4core.color("#ffffff");

      return series;
    }

    chart.data = [
      {
        category: "Place #1",
        first: 40,
        second: 55,
        third: 60,
      },
      {
        category: "Place #2",
        first: 30,
        second: 78,
        third: 69,
      },
      {
        category: "Place #3",
        first: 27,
        second: 40,
        third: 45,
      },
      {
        category: "Place #4",
        first: 50,
        second: 33,
        third: 22,
      },
    ];

    createSeries("first", "The Thirst");
    createSeries("second", "The Second");
    createSeries("third", "The Third");

    function arrangeColumns() {
      var series = chart.series.getIndex(0);

      var w =
        1 -
        xAxis.renderer.cellStartLocation -
        (1 - xAxis.renderer.cellEndLocation);
      if (series.dataItems.length > 1) {
        var x0 = xAxis.getX(series.dataItems.getIndex(0), "categoryX");
        var x1 = xAxis.getX(series.dataItems.getIndex(1), "categoryX");
        var delta = ((x1 - x0) / chart.series.length) * w;
        if (am4core.isNumber(delta)) {
          var middle = chart.series.length / 2;

          var newIndex = 0;
          chart.series.each(function (series) {
            if (!series.isHidden && !series.isHiding) {
              series.dummyData = newIndex;
              newIndex++;
            } else {
              series.dummyData = chart.series.indexOf(series);
            }
          });
          var visibleCount = newIndex;
          var newMiddle = visibleCount / 2;

          chart.series.each(function (series) {
            var trueIndex = chart.series.indexOf(series);
            var newIndex = series.dummyData;

            var dx = (newIndex - trueIndex + middle - newMiddle) * delta;

            series.animate(
              { property: "dx", to: dx },
              series.interpolationDuration,
              series.interpolationEasing
            );
            series.bulletsContainer.animate(
              { property: "dx", to: dx },
              series.interpolationDuration,
              series.interpolationEasing
            );
          });
        }
      }
    }
  }); // end am4core.ready()
}

function lineChart() {
  // Themes begin
  am4core.useTheme(am4themes_animated);
  // Themes end

  // Create chart instance
  var chart = am4core.create("lineChart", am4charts.XYChart);

  // Add data
  chart.data = [
    {
      date: "2012-08-12",
      value: 32,
    },
    {
      date: "2012-08-13",
      value: 18,
    },
    {
      date: "2012-08-14",
      value: 24,
    },
    {
      date: "2012-08-15",
      value: 22,
    },
    {
      date: "2012-08-16",
      value: 18,
    },
    {
      date: "2012-08-17",
      value: 19,
    },
    {
      date: "2012-08-18",
      value: 14,
    },
    {
      date: "2012-08-19",
      value: 15,
    },
    {
      date: "2012-08-20",
      value: 12,
    },
    {
      date: "2012-08-28",
      value: 18,
    },
    {
      date: "2012-08-29",
      value: 20,
    },
    {
      date: "2012-08-30",
      value: 29,
    },
    {
      date: "2012-08-31",
      value: 33,
    },
    {
      date: "2012-09-01",
      value: 42,
    },
    {
      date: "2012-09-02",
      value: 35,
    },
    {
      date: "2012-09-03",
      value: 31,
    },
    {
      date: "2012-09-04",
      value: 47,
    },
    {
      date: "2012-09-05",
      value: 52,
    },
    {
      date: "2012-09-06",
      value: 46,
    },
    {
      date: "2012-09-07",
      value: 41,
    },
    {
      date: "2012-09-08",
      value: 43,
    },
    {
      date: "2012-09-09",
      value: 40,
    },
    {
      date: "2012-09-10",
      value: 39,
    },
    {
      date: "2012-09-11",
      value: 34,
    },
    {
      date: "2012-09-12",
      value: 29,
    },
    {
      date: "2012-09-13",
      value: 34,
    },
    {
      date: "2012-11-14",
      value: 81,
    },
    {
      date: "2012-11-15",
      value: 87,
    },
    {
      date: "2012-11-16",
      value: 82,
    },
    {
      date: "2012-11-17",
      value: 86,
    },
    {
      date: "2012-11-18",
      value: 80,
    },
    {
      date: "2012-11-19",
      value: 87,
    },
    {
      date: "2012-11-20",
      value: 83,
    },
    {
      date: "2012-11-21",
      value: 85,
    },
    {
      date: "2012-11-22",
      value: 84,
    },
    {
      date: "2012-11-23",
      value: 82,
    },
    {
      date: "2012-11-24",
      value: 73,
    },
    {
      date: "2012-11-25",
      value: 71,
    },
    {
      date: "2012-11-26",
      value: 75,
    },
    {
      date: "2012-11-27",
      value: 79,
    },
    {
      date: "2012-11-28",
      value: 70,
    },
    {
      date: "2012-11-29",
      value: 73,
    },
    {
      date: "2012-11-30",
      value: 61,
    },
    {
      date: "2012-12-01",
      value: 62,
    },
    {
      date: "2012-12-02",
      value: 66,
    },
    {
      date: "2012-12-03",
      value: 65,
    },
    {
      date: "2012-12-04",
      value: 73,
    },
    {
      date: "2012-12-05",
      value: 79,
    },
    {
      date: "2012-12-06",
      value: 78,
    },
    {
      date: "2012-12-07",
      value: 78,
    },
    {
      date: "2012-12-08",
      value: 78,
    },
    {
      date: "2012-12-09",
      value: 74,
    },
    {
      date: "2012-12-10",
      value: 73,
    },
    {
      date: "2012-12-11",
      value: 75,
    },
    {
      date: "2012-12-12",
      value: 70,
    },
    {
      date: "2012-12-13",
      value: 77,
    },
    {
      date: "2012-12-14",
      value: 67,
    },
    {
      date: "2012-12-15",
      value: 62,
    },
    {
      date: "2012-12-16",
      value: 64,
    },
    {
      date: "2012-12-17",
      value: 61,
    },
    {
      date: "2012-12-18",
      value: 59,
    },
    {
      date: "2012-12-19",
      value: 53,
    },
    {
      date: "2012-12-20",
      value: 54,
    },
    {
      date: "2012-12-21",
      value: 56,
    },
    {
      date: "2012-12-22",
      value: 59,
    },
    {
      date: "2012-12-23",
      value: 58,
    },
    {
      date: "2012-12-24",
      value: 55,
    },
    {
      date: "2012-12-25",
      value: 52,
    },
    {
      date: "2012-12-26",
      value: 54,
    },
    {
      date: "2012-12-27",
      value: 50,
    },
    {
      date: "2012-12-28",
      value: 50,
    },
    {
      date: "2012-12-29",
      value: 51,
    },
    {
      date: "2012-12-30",
      value: 52,
    },
    {
      date: "2012-12-31",
      value: 58,
    },
    {
      date: "2013-01-01",
      value: 60,
    },
    {
      date: "2013-01-02",
      value: 67,
    },
    {
      date: "2013-01-03",
      value: 64,
    },
    {
      date: "2013-01-04",
      value: 66,
    },
    {
      date: "2013-01-05",
      value: 60,
    },
    {
      date: "2013-01-06",
      value: 63,
    },
    {
      date: "2013-01-07",
      value: 61,
    },
    {
      date: "2013-01-08",
      value: 60,
    },
    {
      date: "2013-01-09",
      value: 65,
    },
    {
      date: "2013-01-10",
      value: 75,
    },
    {
      date: "2013-01-11",
      value: 77,
    },
    {
      date: "2013-01-12",
      value: 78,
    },
    {
      date: "2013-01-13",
      value: 70,
    },
    {
      date: "2013-01-14",
      value: 70,
    },
    {
      date: "2013-01-15",
      value: 73,
    },
    {
      date: "2013-01-16",
      value: 71,
    },
    {
      date: "2013-01-17",
      value: 74,
    },
    {
      date: "2013-01-18",
      value: 78,
    },
    {
      date: "2013-01-19",
      value: 85,
    },
    {
      date: "2013-01-20",
      value: 82,
    },
    {
      date: "2013-01-21",
      value: 83,
    },
    {
      date: "2013-01-22",
      value: 88,
    },
    {
      date: "2013-01-23",
      value: 85,
    },
    {
      date: "2013-01-24",
      value: 85,
    },
    {
      date: "2013-01-25",
      value: 80,
    },
    {
      date: "2013-01-26",
      value: 87,
    },
    {
      date: "2013-01-27",
      value: 84,
    },
    {
      date: "2013-01-28",
      value: 83,
    },
    {
      date: "2013-01-29",
      value: 84,
    },
    {
      date: "2013-01-30",
      value: 81,
    },
  ];

  // Create axes
  var dateAxis = chart.xAxes.push(new am4charts.DateAxis());
  dateAxis.renderer.labels.template.fill = am4core.color("#9aa0ac");
  var valueAxis = chart.yAxes.push(new am4charts.ValueAxis());
  valueAxis.renderer.labels.template.fill = am4core.color("#9aa0ac");

  // Create series
  var series = chart.series.push(new am4charts.LineSeries());
  series.dataFields.valueY = "value";
  series.dataFields.dateX = "date";
  series.tooltipText = "{value}";
  series.strokeWidth = 2;
  series.minBulletDistance = 15;

  // Drop-shaped tooltips
  series.tooltip.background.cornerRadius = 20;
  series.tooltip.background.strokeOpacity = 0;
  series.tooltip.pointerOrientation = "vertical";
  series.tooltip.label.minWidth = 40;
  series.tooltip.label.minHeight = 40;
  series.tooltip.label.textAlign = "middle";
  series.tooltip.label.textValign = "middle";

  // Make bullets grow on hover
  var bullet = series.bullets.push(new am4charts.CircleBullet());
  bullet.circle.strokeWidth = 2;
  bullet.circle.radius = 4;
  bullet.circle.fill = am4core.color("#fff");

  var bullethover = bullet.states.create("hover");
  bullethover.properties.scale = 1.3;

  // Make a panning cursor
  chart.cursor = new am4charts.XYCursor();
  chart.cursor.behavior = "panXY";
  chart.cursor.xAxis = dateAxis;
  chart.cursor.snapToSeries = series;

  // Create vertical scrollbar and place it before the value axis
  chart.scrollbarY = new am4core.Scrollbar();
  chart.scrollbarY.parent = chart.leftAxesContainer;
  chart.scrollbarY.toBack();

  // Create a horizontal scrollbar with previe and place it underneath the date axis
  chart.scrollbarX = new am4charts.XYChartScrollbar();
  chart.scrollbarX.series.push(series);
  chart.scrollbarX.parent = chart.bottomAxesContainer;

  chart.events.on("ready", function () {
    dateAxis.zoom({ start: 0.9, end: 1 });
  });
}

function donutChart() {
  // Themes begin
  am4core.useTheme(am4themes_animated);
  // Themes end

  // Create chart instance
  var chart = am4core.create("donutChart", am4charts.PieChart);

  // Add data
  chart.data = [
    {
      country: "Lithuania",
      litres: 501.9,
    },
    {
      country: "Czech Republic",
      litres: 301.9,
    },
    {
      country: "Ireland",
      litres: 201.1,
    },
    {
      country: "Germany",
      litres: 165.8,
    },
    {
      country: "Australia",
      litres: 139.9,
    },
    {
      country: "Austria",
      litres: 128.3,
    },
    {
      country: "UK",
      litres: 99,
    },
    {
      country: "Belgium",
      litres: 60,
    },
    {
      country: "The Netherlands",
      litres: 50,
    },
  ];

  // Set inner radius
  chart.innerRadius = am4core.percent(50);

  // Add and configure Series
  var pieSeries = chart.series.push(new am4charts.PieSeries());
  pieSeries.dataFields.value = "litres";
  pieSeries.dataFields.category = "country";
  pieSeries.slices.template.stroke = am4core.color("#fff");
  pieSeries.slices.template.strokeWidth = 2;
  pieSeries.slices.template.strokeOpacity = 1;
  pieSeries.labels.template.fill = am4core.color("#9aa0ac");

  // This creates initial animation
  pieSeries.hiddenState.properties.opacity = 1;
  pieSeries.hiddenState.properties.endAngle = -90;
  pieSeries.hiddenState.properties.startAngle = -90;
}

function pieChart() {
  // Themes begin
  am4core.useTheme(am4themes_animated);
  // Themes end

  // Create chart instance
  var chart = am4core.create("pieChart", am4charts.PieChart);

  // Add data
  chart.data = [
    {
      country: "Lithuania",
      litres: 501.9,
    },
    {
      country: "Czech Republic",
      litres: 301.9,
    },
    {
      country: "Ireland",
      litres: 201.1,
    },
    {
      country: "Germany",
      litres: 165.8,
    },
    {
      country: "Australia",
      litres: 139.9,
    },
    {
      country: "Austria",
      litres: 128.3,
    },
    {
      country: "UK",
      litres: 99,
    },
    {
      country: "Belgium",
      litres: 60,
    },
    {
      country: "The Netherlands",
      litres: 50,
    },
  ];

  // Add and configure Series
  var pieSeries = chart.series.push(new am4charts.PieSeries());
  pieSeries.dataFields.value = "litres";
  pieSeries.dataFields.category = "country";
  pieSeries.slices.template.stroke = am4core.color("#fff");
  pieSeries.slices.template.strokeWidth = 2;
  pieSeries.slices.template.strokeOpacity = 1;
  pieSeries.labels.template.fill = am4core.color("#9aa0ac");

  // This creates initial animation
  pieSeries.hiddenState.properties.opacity = 1;
  pieSeries.hiddenState.properties.endAngle = -90;
  pieSeries.hiddenState.properties.startAngle = -90;
}

function gaugeChart() {
  // Themes begin
  am4core.useTheme(am4themes_animated);
  // Themes end

  // Create chart instance
  var chart = am4core.create("gaugeChart", am4charts.RadarChart);

  // Add data
  chart.data = [
    {
      category: "Research",
      value: 80,
      full: 100,
    },
    {
      category: "Marketing",
      value: 35,
      full: 100,
    },
    {
      category: "Distribution",
      value: 92,
      full: 100,
    },
    {
      category: "Human Resources",
      value: 68,
      full: 100,
    },
  ];

  // Make chart not full circle
  chart.startAngle = -90;
  chart.endAngle = 180;
  chart.innerRadius = am4core.percent(20);

  // Set number format
  chart.numberFormatter.numberFormat = "#.#'%'";

  // Create axes
  var categoryAxis = chart.yAxes.push(new am4charts.CategoryAxis());
  categoryAxis.dataFields.category = "category";
  categoryAxis.renderer.grid.template.location = 0;
  categoryAxis.renderer.grid.template.strokeOpacity = 0;
  categoryAxis.renderer.labels.template.horizontalCenter = "right";
  categoryAxis.renderer.labels.template.fontWeight = 500;
  categoryAxis.renderer.labels.template.adapter.add("fill", function (
    fill,
    target
  ) {
    return target.dataItem.index >= 0
      ? chart.colors.getIndex(target.dataItem.index)
      : fill;
  });
  categoryAxis.renderer.minGridDistance = 10;

  var valueAxis = chart.xAxes.push(new am4charts.ValueAxis());
  valueAxis.renderer.grid.template.strokeOpacity = 0;
  valueAxis.min = 0;
  valueAxis.max = 100;
  valueAxis.strictMinMax = true;
  valueAxis.renderer.labels.template.fill = am4core.color("#9aa0ac");

  // Create series
  var series1 = chart.series.push(new am4charts.RadarColumnSeries());
  series1.dataFields.valueX = "full";
  series1.dataFields.categoryY = "category";
  series1.clustered = false;
  series1.columns.template.fill = new am4core.InterfaceColorSet().getFor(
    "alternativeBackground"
  );
  series1.columns.template.fillOpacity = 0.08;
  series1.columns.template.cornerRadiusTopLeft = 20;
  series1.columns.template.strokeWidth = 0;
  series1.columns.template.radarColumn.cornerRadius = 20;

  var series2 = chart.series.push(new am4charts.RadarColumnSeries());
  series2.dataFields.valueX = "value";
  series2.dataFields.categoryY = "category";
  series2.clustered = false;
  series2.columns.template.strokeWidth = 0;
  series2.columns.template.tooltipText = "{category}: [bold]{value}[/]";
  series2.columns.template.radarColumn.cornerRadius = 20;

  series2.columns.template.adapter.add("fill", function (fill, target) {
    return chart.colors.getIndex(target.dataItem.index);
  });

  // Add cursor
  chart.cursor = new am4charts.RadarCursor();
}
function radialLineChart() {
  // Themes begin
  am4core.useTheme(am4themes_animated);
  // Themes end

  /* Create chart instance */
  var chart = am4core.create("radialLineChart", am4charts.RadarChart);

  var data = [];
  var value1 = 500;
  var value2 = 600;

  for (var i = 0; i < 12; i++) {
    let date = new Date();
    date.setMonth(i, 1);
    value1 -= Math.round((Math.random() < 0.5 ? 1 : -1) * Math.random() * 50);
    value2 -= Math.round((Math.random() < 0.5 ? 1 : -1) * Math.random() * 50);
    data.push({ date: date, value1: value1, value2: value2 });
  }

  chart.data = data;

  /* Create axes */
  var categoryAxis = chart.xAxes.push(new am4charts.DateAxis());
  categoryAxis.renderer.labels.template.fill = am4core.color("#9aa0ac");

  var valueAxis = chart.yAxes.push(new am4charts.ValueAxis());
  valueAxis.extraMin = 0.2;
  valueAxis.extraMax = 0.2;
  valueAxis.tooltip.disabled = true;
  valueAxis.renderer.labels.template.fill = am4core.color("#9aa0ac");

  /* Create and configure series */
  var series1 = chart.series.push(new am4charts.RadarSeries());
  series1.dataFields.valueY = "value1";
  series1.dataFields.dateX = "date";
  series1.strokeWidth = 3;
  series1.tooltipText = "{valueY}";
  series1.name = "Series 2";
  series1.bullets.create(am4charts.CircleBullet);

  var series2 = chart.series.push(new am4charts.RadarSeries());
  series2.dataFields.valueY = "value2";
  series2.dataFields.dateX = "date";
  series2.strokeWidth = 3;
  series2.tooltipText = "{valueY}";
  series2.name = "Series 2";
  series2.bullets.create(am4charts.CircleBullet);

  chart.scrollbarX = new am4core.Scrollbar();
  chart.scrollbarY = new am4core.Scrollbar();

  chart.cursor = new am4charts.RadarCursor();

  chart.legend = new am4charts.Legend();
}
function dumbbellPlotChart() {
  // Themes begin
  am4core.useTheme(am4themes_animated);
  // Themes end

  var chart = am4core.create("dumbbellPlotChart", am4charts.XYChart);

  var data = [];
  var open = 100;
  var close = 120;

  var names = [
    "Raina",
    "Demarcus",
    "Carlo",
    "Jacinda",
    "Richie",
    "Antony",
    "Amada",
    "Idalia",
    "Janella",
    "Marla",
    "Curtis",
    "Shellie",
  ];

  for (var i = 0; i < names.length; i++) {
    open += Math.round((Math.random() < 0.5 ? 1 : -1) * Math.random() * 5);
    close = open + Math.round(Math.random() * 10) + 3;
    data.push({ category: names[i], open: open, close: close });
  }

  chart.data = data;

  var categoryAxis = chart.xAxes.push(new am4charts.CategoryAxis());
  categoryAxis.renderer.grid.template.location = 0;
  categoryAxis.renderer.ticks.template.disabled = true;
  categoryAxis.renderer.axisFills.template.disabled = true;
  categoryAxis.dataFields.category = "category";
  categoryAxis.renderer.minGridDistance = 15;
  categoryAxis.renderer.grid.template.location = 0.5;
  categoryAxis.renderer.grid.template.strokeDasharray = "1,3";
  categoryAxis.renderer.labels.template.rotation = -90;
  categoryAxis.renderer.labels.template.horizontalCenter = "left";
  categoryAxis.renderer.labels.template.dx = 17;
  categoryAxis.renderer.inside = true;
  categoryAxis.renderer.labels.template.fill = am4core.color("#9aa0ac");

  var valueAxis = chart.yAxes.push(new am4charts.ValueAxis());
  valueAxis.tooltip.disabled = true;
  valueAxis.renderer.ticks.template.disabled = true;
  valueAxis.renderer.axisFills.template.disabled = true;
  valueAxis.renderer.labels.template.fill = am4core.color("#9aa0ac");

  var series = chart.series.push(new am4charts.ColumnSeries());
  series.dataFields.categoryX = "category";
  series.dataFields.openValueY = "open";
  series.dataFields.valueY = "close";
  series.tooltipText = "open: {openValueY.value} close: {valueY.value}";
  series.sequencedInterpolation = true;
  series.fillOpacity = 0;
  series.strokeOpacity = 1;
  series.columns.template.width = 0.01;
  series.tooltip.pointerOrientation = "horizontal";

  var openBullet = series.bullets.create(am4charts.CircleBullet);
  openBullet.locationY = 1;

  var closeBullet = series.bullets.create(am4charts.CircleBullet);

  closeBullet.fill = chart.colors.getIndex(4);
  closeBullet.stroke = closeBullet.fill;

  chart.cursor = new am4charts.XYCursor();

  chart.scrollbarX = new am4core.Scrollbar();
  chart.scrollbarY = new am4core.Scrollbar();
}

function mapBubble() {
  // Themes begin
  am4core.useTheme(am4themes_animated);
  // Themes end

  // Create map instance
  var chart = am4core.create("mapBubble", am4maps.MapChart);

  var title = chart.titles.create();
  title.text =
    "[bold font-size: 20]Population of Countries in 2011[/]\nsource: Gapminder";
  title.textAlign = "middle";

  var latlong = {
    IN: { latitude: 20, longitude: 77 },
    JP: { latitude: 36, longitude: 138 },
    AU: { latitude: -27, longitude: 133 },
    US: { latitude: 38, longitude: -97 },
    RU: { latitude: 60, longitude: 100 },
    BR: { latitude: -10, longitude: -55 },
    DZ: { latitude: 28, longitude: 3 },
  };

  var mapData = [
    {
      id: "IN",
      name: "India",
      value: 1241491960,
      color: chart.colors.getIndex(0),
    },
    {
      id: "JP",
      name: "Japan",
      value: 126497241,
      color: chart.colors.getIndex(0),
    },
    { id: "AU", name: "Australia", value: 22605732, color: "#8aabb0" },
    {
      id: "US",
      name: "United States",
      value: 313085380,
      color: chart.colors.getIndex(4),
    },
    {
      id: "RU",
      name: "Russia",
      value: 142835555,
      color: chart.colors.getIndex(1),
    },
    {
      id: "BR",
      name: "Brazil",
      value: 196655014,
      color: chart.colors.getIndex(3),
    },
    {
      id: "DZ",
      name: "Algeria",
      value: 35980193,
      color: chart.colors.getIndex(2),
    },
  ];

  // Add lat/long information to data
  for (var i = 0; i < mapData.length; i++) {
    mapData[i].latitude = latlong[mapData[i].id].latitude;
    mapData[i].longitude = latlong[mapData[i].id].longitude;
  }

  // Set map definition
  chart.geodata = am4geodata_worldLow;

  // Set projection
  chart.projection = new am4maps.projections.Miller();

  // Create map polygon series
  var polygonSeries = chart.series.push(new am4maps.MapPolygonSeries());
  polygonSeries.exclude = ["AQ"];
  polygonSeries.useGeodata = true;

  var imageSeries = chart.series.push(new am4maps.MapImageSeries());
  imageSeries.data = mapData;
  imageSeries.dataFields.value = "value";

  var imageTemplate = imageSeries.mapImages.template;
  imageTemplate.propertyFields.latitude = "latitude";
  imageTemplate.propertyFields.longitude = "longitude";
  imageTemplate.nonScaling = true;

  var circle = imageTemplate.createChild(am4core.Circle);
  circle.fillOpacity = 0.7;
  circle.propertyFields.fill = "color";
  circle.tooltipText = "{name}: [bold]{value}[/]";

  imageSeries.heatRules.push({
    target: circle,
    property: "radius",
    min: 4,
    max: 30,
    dataField: "value",
  });
}

"use strict";
$(function () {
  chart1();
  chart2();
  chart3();
  chart4();
  chart5();
  chart6();
  chart7();
  chart8();
});

function chart1() {
  var options = {
    chart: {
      height: 350,
      type: "bar",
    },
    plotOptions: {
      bar: {
        horizontal: false,
        endingShape: "rounded",
        columnWidth: "55%",
      },
    },
    dataLabels: {
      enabled: false,
    },
    stroke: {
      show: true,
      width: 2,
      colors: ["transparent"],
    },
    series: [
      {
        name: "Net Profit",
        data: [44, 55, 57, 56, 61, 58, 63, 60, 66],
      },
      {
        name: "Revenue",
        data: [76, 85, 101, 98, 87, 105, 91, 114, 94],
      },
      {
        name: "Free Cash Flow",
        data: [35, 41, 36, 26, 45, 48, 52, 53, 41],
      },
    ],
    xaxis: {
      categories: [
        "Feb",
        "Mar",
        "Apr",
        "May",
        "Jun",
        "Jul",
        "Aug",
        "Sep",
        "Oct",
      ],
      labels: {
        style: {
          colors: "#9aa0ac",
        },
      },
    },
    yaxis: {
      title: {
        text: "$ (thousands)",
      },
      labels: {
        style: {
          color: "#9aa0ac",
        },
      },
    },
    fill: {
      opacity: 1,
    },
    tooltip: {
      y: {
        formatter: function (val) {
          return "$ " + val + " thousands";
        },
      },
    },
  };

  var chart = new ApexCharts(document.querySelector("#chart1"), options);

  chart.render();
}

function chart2() {
  var options = {
    chart: {
      height: 350,
      type: "bar",
    },
    plotOptions: {
      bar: {
        dataLabels: {
          position: "top", // top, center, bottom
        },
      },
    },
    dataLabels: {
      enabled: true,
      formatter: function (val) {
        return val + "%";
      },
      offsetY: -20,
      style: {
        fontSize: "12px",
        colors: ["#9aa0ac"],
      },
    },
    series: [
      {
        name: "Inflation",
        data: [2.3, 3.1, 4.0, 10.1, 4.0, 3.6, 3.2, 2.3, 1.4, 0.8, 0.5, 0.2],
      },
    ],
    xaxis: {
      categories: [
        "Jan",
        "Feb",
        "Mar",
        "Apr",
        "May",
        "Jun",
        "Jul",
        "Aug",
        "Sep",
        "Oct",
        "Nov",
        "Dec",
      ],
      position: "top",
      labels: {
        offsetY: -18,
        style: {
          colors: "#9aa0ac",
        },
      },
      axisBorder: {
        show: false,
      },
      axisTicks: {
        show: false,
      },
      crosshairs: {
        fill: {
          type: "gradient",
          gradient: {
            colorFrom: "#D8E3F0",
            colorTo: "#BED1E6",
            stops: [0, 100],
            opacityFrom: 0.4,
            opacityTo: 0.5,
          },
        },
      },
      tooltip: {
        enabled: true,
        offsetY: -35,
      },
    },
    fill: {
      gradient: {
        shade: "light",
        type: "horizontal",
        shadeIntensity: 0.25,
        gradientToColors: undefined,
        inverseColors: true,
        opacityFrom: 1,
        opacityTo: 1,
        stops: [50, 0, 100, 100],
      },
    },
    yaxis: {
      axisBorder: {
        show: false,
      },
      axisTicks: {
        show: false,
      },
      labels: {
        show: false,
        formatter: function (val) {
          return val + "%";
        },
      },
    },
    title: {
      text: "Monthly Inflation in Argentina, 2002",
      floating: true,
      offsetY: 320,
      align: "center",
      style: {
        color: "#9aa0ac",
      },
    },
  };

  var chart = new ApexCharts(document.querySelector("#chart2"), options);

  chart.render();
}
function chart3() {
  var options = {
    chart: {
      height: 350,
      type: "line",
      shadow: {
        enabled: true,
        color: "#000",
        top: 18,
        left: 7,
        blur: 10,
        opacity: 1,
      },
      toolbar: {
        show: false,
      },
    },
    colors: ["#77B6EA", "#545454"],
    dataLabels: {
      enabled: true,
    },
    stroke: {
      curve: "smooth",
    },
    series: [
      {
        name: "High - 2013",
        data: [28, 29, 33, 36, 32, 32, 33],
      },
      {
        name: "Low - 2013",
        data: [12, 11, 14, 18, 17, 13, 13],
      },
    ],
    title: {
      text: "Average High & Low Temperature",
      align: "left",
    },
    grid: {
      borderColor: "#e7e7e7",
      row: {
        colors: ["#f3f3f3", "transparent"], // takes an array which will be repeated on columns
        opacity: 0.5,
      },
    },
    markers: {
      size: 6,
    },
    xaxis: {
      categories: ["Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul"],
      title: {
        text: "Month",
      },
      labels: {
        style: {
          colors: "#9aa0ac",
        },
      },
    },
    yaxis: {
      title: {
        text: "Temperature",
      },
      labels: {
        style: {
          color: "#9aa0ac",
        },
      },
      min: 5,
      max: 40,
    },
    legend: {
      position: "top",
      horizontalAlign: "right",
      floating: true,
      offsetY: -25,
      offsetX: -5,
    },
  };

  var chart = new ApexCharts(document.querySelector("#chart3"), options);

  chart.render();
}
function chart4() {
  var options = {
    chart: {
      height: 350,
      type: "line",
      shadow: {
        enabled: false,
        color: "#bbb",
        top: 3,
        left: 2,
        blur: 3,
        opacity: 1,
      },
    },
    stroke: {
      width: 7,
      curve: "smooth",
    },
    series: [
      {
        name: "Likes",
        data: [4, 3, 10, 9, 29, 19, 22, 9, 12, 7, 19, 5, 13, 9, 17, 2, 7, 5],
      },
    ],
    xaxis: {
      type: "datetime",
      categories: [
        "1/11/2000",
        "2/11/2000",
        "3/11/2000",
        "4/11/2000",
        "5/11/2000",
        "6/11/2000",
        "7/11/2000",
        "8/11/2000",
        "9/11/2000",
        "10/11/2000",
        "11/11/2000",
        "12/11/2000",
        "1/11/2001",
        "2/11/2001",
        "3/11/2001",
        "4/11/2001",
        "5/11/2001",
        "6/11/2001",
      ],
      labels: {
        style: {
          colors: "#9aa0ac",
        },
      },
    },
    title: {
      text: "Social Media",
      align: "left",
      style: {
        fontSize: "16px",
        color: "#666",
      },
    },
    fill: {
      type: "gradient",
      gradient: {
        shade: "dark",
        gradientToColors: ["#FDD835"],
        shadeIntensity: 1,
        type: "horizontal",
        opacityFrom: 1,
        opacityTo: 1,
        stops: [0, 100, 100, 100],
      },
    },
    markers: {
      size: 4,
      opacity: 0.9,
      colors: ["#FFA41B"],
      strokeColor: "#fff",
      strokeWidth: 2,

      hover: {
        size: 7,
      },
    },
    yaxis: {
      min: -10,
      max: 40,
      title: {
        text: "Engagement",
      },
      labels: {
        style: {
          color: "#9aa0ac",
        },
      },
    },
  };

  var chart = new ApexCharts(document.querySelector("#chart4"), options);

  chart.render();
}
function chart5() {
  var options = {
    chart: {
      height: 350,
      type: "line",
    },
    series: [
      {
        name: "Website Blog",
        type: "column",
        data: [440, 505, 414, 671, 227, 413, 201, 352, 752, 320, 257, 160],
      },
      {
        name: "Social Media",
        type: "line",
        data: [23, 42, 35, 27, 43, 22, 17, 31, 22, 22, 12, 16],
      },
    ],
    stroke: {
      width: [0, 4],
    },
    title: {
      text: "Traffic Sources",
    },
    // labels: ["Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov", "Dec"],
    labels: [
      "01 Jan 2001",
      "02 Jan 2001",
      "03 Jan 2001",
      "04 Jan 2001",
      "05 Jan 2001",
      "06 Jan 2001",
      "07 Jan 2001",
      "08 Jan 2001",
      "09 Jan 2001",
      "10 Jan 2001",
      "11 Jan 2001",
      "12 Jan 2001",
    ],
    xaxis: {
      type: "datetime",
      labels: {
        style: {
          colors: "#9aa0ac",
        },
      },
    },
    yaxis: [
      {
        title: {
          text: "Website Blog",
        },
        labels: {
          style: {
            color: "#9aa0ac",
          },
        },
      },
      {
        opposite: true,
        title: {
          text: "Social Media",
        },
        labels: {
          style: {
            color: "#9aa0ac",
          },
        },
      },
    ],
  };

  var chart = new ApexCharts(document.querySelector("#chart5"), options);

  chart.render();
}
function chart6() {
  var options = {
    chart: {
      height: 350,
      type: "area",
    },
    dataLabels: {
      enabled: false,
    },
    stroke: {
      curve: "smooth",
    },
    series: [
      {
        name: "series1",
        data: [31, 40, 28, 51, 42, 109, 100],
      },
      {
        name: "series2",
        data: [11, 32, 45, 32, 34, 52, 41],
      },
    ],

    xaxis: {
      type: "datetime",
      categories: [
        "2018-09-19T00:00:00",
        "2018-09-19T01:30:00",
        "2018-09-19T02:30:00",
        "2018-09-19T03:30:00",
        "2018-09-19T04:30:00",
        "2018-09-19T05:30:00",
        "2018-09-19T06:30:00",
      ],
      labels: {
        style: {
          colors: "#9aa0ac",
        },
      },
    },
    yaxis: {
      labels: {
        style: {
          color: "#9aa0ac",
        },
      },
    },
    tooltip: {
      x: {
        format: "dd/MM/yy HH:mm",
      },
    },
  };

  var chart = new ApexCharts(document.querySelector("#chart6"), options);

  chart.render();
}
function chart7() {
  var options = {
    chart: {
      width: 360,
      type: "pie",
    },
    labels: ["Team A", "Team B", "Team C", "Team D", "Team E"],
    series: [44, 55, 13, 43, 22],
    responsive: [
      {
        breakpoint: 480,
        options: {
          chart: {
            width: 200,
          },
          legend: {
            position: "bottom",
          },
        },
      },
    ],
  };

  var chart = new ApexCharts(document.querySelector("#chart7"), options);

  chart.render();
}
function chart8() {
  var options = {
    chart: {
      height: 350,
      type: "radar",
      dropShadow: {
        enabled: true,
        blur: 1,
        left: 1,
        top: 1,
      },
    },
    series: [
      {
        name: "Series 1",
        data: [80, 50, 30, 40, 100, 20],
      },
      {
        name: "Series 2",
        data: [20, 30, 40, 80, 20, 80],
      },
      {
        name: "Series 3",
        data: [44, 76, 78, 13, 43, 10],
      },
    ],
    title: {
      text: "Radar Chart - Multi Series",
    },
    stroke: {
      width: 0,
    },
    fill: {
      opacity: 0.4,
    },
    markers: {
      size: 0,
    },
    labels: ["2011", "2012", "2013", "2014", "2015", "2016"],
  };

  var chart = new ApexCharts(document.querySelector("#chart8"), options);

  chart.render();

  function update() {
    function randomSeries() {
      var arr = [];
      for (var i = 0; i < 6; i++) {
        arr.push(Math.floor(Math.random() * 100));
      }

      return arr;
    }

    chart.updateSeries([
      {
        name: "Series 1",
        data: randomSeries(),
      },
      {
        name: "Series 2",
        data: randomSeries(),
      },
      {
        name: "Series 3",
        data: randomSeries(),
      },
    ]);
  }
}


$(document).ready(function() {
	var MONTHS = ["January", "February", "March", "April", "May", "June", "July", "August", "September", "October", "November", "December"];
    var config = {
        type: 'line',
        data: {
            labels: ["January", "February", "March", "April", "May", "June", "July"],
            datasets: [{
                label: "New Students",
                backgroundColor: window.chartColors.red,
                borderColor: window.chartColors.red,
                data: [
                    randomScalingFactor(),
                    randomScalingFactor(),
                    randomScalingFactor(),
                    randomScalingFactor(),
                    randomScalingFactor(),
                    randomScalingFactor(),
                    randomScalingFactor()
                ],
                fill: false,
            }, {
                label: "Old Students",
                fill: false,
                backgroundColor: window.chartColors.blue,
                borderColor: window.chartColors.blue,
                data: [
                    randomScalingFactor(),
                    randomScalingFactor(),
                    randomScalingFactor(),
                    randomScalingFactor(),
                    randomScalingFactor(),
                    randomScalingFactor(),
                    randomScalingFactor()
                ],
            }]
        },
        options: {
            responsive: true,
            title:{
                display:true,
                text:'UNIVERSITY SURVEY'
            },
            tooltips: {
                mode: 'index',
                intersect: false,
            },
            hover: {
                mode: 'nearest',
                intersect: true
            },
            scales: {
                xAxes: [{
                    display: true,
                    scaleLabel: {
                        display: true,
                        labelString: 'Month'
                    }
                }],
                yAxes: [{
                    display: true,
                    scaleLabel: {
                        display: true,
                        labelString: 'Students'
                    }
                }]
            }
        }
    };
    var ctx = document.getElementById("chartjs_line").getContext("2d");
    window.myLine = new Chart(ctx, config);
	});
        
      
$(document).ready(function() {
	var randomScalingFactor = function() {
        return Math.round(Math.random() * 100);
    };

    var config = {
        type: 'pie',
    data: {
        datasets: [{
            data: [
                randomScalingFactor(),
                randomScalingFactor(),
                randomScalingFactor(),
                randomScalingFactor(),
                randomScalingFactor(),
            ],
            backgroundColor: [
                window.chartColors.red,
                window.chartColors.orange,
                window.chartColors.yellow,
                window.chartColors.green,
                window.chartColors.blue,
            ],
            label: 'Dataset 1'
        }],
        labels: [
            "Red",
            "Orange",
            "Yellow",
            "Green",
            "Blue"
        ]
    },
    options: {
        responsive: true
    }
};

    var ctx = document.getElementById("chartjs_pie").getContext("2d");
    window.myPie = new Chart(ctx, config);
}); 

$(document).ready(function() {
	 var MONTHS = ["January", "February", "March", "April", "May", "June", "July", "August", "September", "October", "November", "December"];
     var color = Chart.helpers.color;
     var barChartData = {
         labels: ["January", "February", "March", "April", "May", "June", "July"],
         datasets: [{
             label: 'New Students',
             backgroundColor: color(window.chartColors.red).alpha(0.5).rgbString(),
             borderColor: window.chartColors.red,
             borderWidth: 1,
             data: [
                 randomScalingFactor(),
                 randomScalingFactor(),
                 randomScalingFactor(),
                 randomScalingFactor(),
                 randomScalingFactor(),
                 randomScalingFactor(),
                 randomScalingFactor()
             ]
         }, {
             label: 'Old Students',
             backgroundColor: color(window.chartColors.blue).alpha(0.5).rgbString(),
             borderColor: window.chartColors.blue,
             borderWidth: 1,
             data: [
                 randomScalingFactor(),
                 randomScalingFactor(),
                 randomScalingFactor(),
                 randomScalingFactor(),
                 randomScalingFactor(),
                 randomScalingFactor(),
                 randomScalingFactor()
             ]
         }]

     };

         var ctx = document.getElementById("chartjs_bar").getContext("2d");
         window.myBar = new Chart(ctx, {
             type: 'bar',
             data: barChartData,
             options: {
                 responsive: true,
                 legend: {
                     position: 'top',
                 },
                 title: {
                     display: true,
                     text: 'Bar Chart'
                 }
             }
         });

	});

$(document).ready(function() {
	var randomScalingFactor = function() {
        return Math.round(Math.random() * 100);
    };

    var chartColors = window.chartColors;
    var color = Chart.helpers.color;
    var config = {
        data: {
            datasets: [{
                data: [
                    randomScalingFactor(),
                    randomScalingFactor(),
                    randomScalingFactor(),
                    randomScalingFactor(),
                    randomScalingFactor(),
                ],
                backgroundColor: [
                    color(chartColors.red).alpha(0.5).rgbString(),
                    color(chartColors.orange).alpha(0.5).rgbString(),
                    color(chartColors.yellow).alpha(0.5).rgbString(),
                    color(chartColors.green).alpha(0.5).rgbString(),
                    color(chartColors.blue).alpha(0.5).rgbString(),
                ],
                label: 'My dataset' // for legend
            }],
            labels: [
                "Red",
                "Orange",
                "Yellow",
                "Green",
                "Blue"
            ]
        },
        options: {
            responsive: true,
            legend: {
                position: 'right',
            },
            title: {
                display: true,
                text: 'Polar Area Chart'
            },
            scale: {
              ticks: {
                beginAtZero: true
              },
              reverse: false
            },
            animation: {
                animateRotate: false,
                animateScale: true
            }
        }
    };

        var ctx = document.getElementById("chartjs_polar");
        window.myPolarArea = Chart.PolarArea(ctx, config);

	});

$(document).ready(function() {
	var randomScalingFactor = function() {
        return Math.round(Math.random() * 100);
    };

    var config = {
        type: 'doughnut',
        data: {
            datasets: [{
                data: [
                    randomScalingFactor(),
                    randomScalingFactor(),
                    randomScalingFactor(),
                    randomScalingFactor(),
                    randomScalingFactor(),
                ],
                backgroundColor: [
                    window.chartColors.red,
                    window.chartColors.orange,
                    window.chartColors.yellow,
                    window.chartColors.green,
                    window.chartColors.blue,
                ],
                label: 'Dataset 1'
            }],
            labels: [
                "Red",
                "Orange",
                "Yellow",
                "Green",
                "Blue"
            ]
        },
        options: {
            responsive: true,
            legend: {
                position: 'top',
            },
            title: {
                display: true,
                text: 'Doughnut Chart'
            },
            animation: {
                animateScale: true,
                animateRotate: true
            }
        }
    };

        var ctx = document.getElementById("chartjs_doughnut").getContext("2d");
        window.myDoughnut = new Chart(ctx, config);
    
	});

$(document).ready(function() {
	var randomScalingFactor = function() {
        return Math.round(Math.random() * 100);
    };

    var color = Chart.helpers.color;
    var config = {
        type: 'radar',
        data: {
            labels: [["Eating", "Dinner"], ["Drinking", "Water"], "Sleeping", ["Designing", "Graphics"], "Coding", "Cycling", "Running"],
            datasets: [{
                label: "New Students",
                backgroundColor: color(window.chartColors.red).alpha(0.2).rgbString(),
                borderColor: window.chartColors.red,
                pointBackgroundColor: window.chartColors.red,
                data: [
                    randomScalingFactor(),
                    randomScalingFactor(),
                    randomScalingFactor(),
                    randomScalingFactor(),
                    randomScalingFactor(),
                    randomScalingFactor(),
                    randomScalingFactor()
                ]
            }, {
                label: "Old Students",
                backgroundColor: color(window.chartColors.blue).alpha(0.2).rgbString(),
                borderColor: window.chartColors.blue,
                pointBackgroundColor: window.chartColors.blue,
                data: [
                    randomScalingFactor(),
                    randomScalingFactor(),
                    randomScalingFactor(),
                    randomScalingFactor(),
                    randomScalingFactor(),
                    randomScalingFactor(),
                    randomScalingFactor()
                ]
            },]
        },
        options: {
            legend: {
                position: 'top',
            },
            title: {
                display: true,
                text: 'Radar Chart'
            },
            scale: {
              ticks: {
                beginAtZero: true
              }
            }
        }
    };

        window.myRadar = new Chart(document.getElementById("radar_chart"), config);

   
	});


$(function () {
  chart1();
  chart2();
});

function chart1() {
  var options = {
    chart: {
      height: 400,
      type: "line",
      shadow: {
        enabled: true,
        color: "#000",
        top: 18,
        left: 7,
        blur: 10,
        opacity: 1,
      },
      toolbar: {
        show: false,
      },
    },
    colors: ["#786BED", "#999b9c"],
    dataLabels: {
      enabled: true,
    },
    stroke: {
      curve: "smooth",
    },
    series: [
      {
        name: "High - 2019",
        data: [19, 15, 14, 24, 25, 19, 22, 24, 25],
      },
      {
        name: "Low - 2019",
        data: [7, 11, 22, 18, 31, 13, 26, 16, 31],
      },
    ],
    grid: {
      borderColor: "#e7e7e7",
      row: {
        colors: ["#f3f3f3", "transparent"], // takes an array which will be repeated on columns
        opacity: 0.0,
      },
    },
    markers: {
      size: 6,
    },
    xaxis: {
      categories: [
        "Jan",
        "Feb",
        "Mar",
        "Apr",
        "May",
        "Jun",
        "july",
        "aug",
        "sep",
      ],

      labels: {
        style: {
          colors: "#9aa0ac",
        },
      },
    },
    yaxis: {
      title: {
        text: "Income",
      },
      labels: {
        style: {
          color: "#9aa0ac",
        },
      },
      min: 5,
      max: 40,
    },
    legend: {
      position: "top",
      horizontalAlign: "right",
      floating: true,
      offsetY: -25,
      offsetX: -5,
    },
  };

  var chart = new ApexCharts(document.querySelector("#chart1"), options);

  chart.render();
}
function chart2() {
  var options = {
    chart: {
      height: 400,
      type: "area",
      toolbar: {
        show: false,
      },
    },
    colors: ["#999b9c", "#4CC2B0"], // line color
    fill: {
      colors: ["#999b9c", "#4CC2B0"], // fill color
    },
    dataLabels: {
      enabled: false,
    },
    stroke: {
      curve: "smooth",
    },
    markers: {
      colors: ["#999b9c", "#4CC2B0"], // marker color
    },
    series: [
      {
        name: "series1",
        data: [31, 40, 28, 51, 22, 64, 80],
      },
      {
        name: "series2",
        data: [11, 32, 67, 32, 44, 52, 41],
      },
    ],
    legend: {
      show: false,
    },
    xaxis: {
      categories: ["Jan", "Feb", "Mar", "Apr", "May", "Jun", "July"],
      labels: {
        style: {
          colors: "#9aa0ac",
        },
      },
    },
    yaxis: {
      labels: {
        style: {
          color: "#9aa0ac",
        },
      },
    },
  };

  var chart = new ApexCharts(document.querySelector("#chart2"), options);

  chart.render();
}

$(document).ready(function() 
		{
	new Chart(document.getElementById("bar-chart"), {
		type: 'bar',
		data: {
			labels: ["2013", "2014", "2015", "2016"],
			datasets: [
			           {
			        	   label: "Cost",
			        	   backgroundColor: "#3e95cd",
			        	   data: [
			                      randomScalingFactor(),
			                      randomScalingFactor(),
			                      randomScalingFactor(),
			                      randomScalingFactor(),
			                      randomScalingFactor(),
			                      randomScalingFactor(),
			                      randomScalingFactor()
			                  ]
			           }, {
			        	   label: "Earing",
			        	   backgroundColor: "#8e5ea2",
			        	   data: [
			                      randomScalingFactor(),
			                      randomScalingFactor(),
			                      randomScalingFactor(),
			                      randomScalingFactor(),
			                      randomScalingFactor(),
			                      randomScalingFactor(),
			                      randomScalingFactor()
			                  ]
			           }
			           ]
		},
		options: {
			title: {
				display: true,
				text: 'University Earing & Cost (in Millions)'
			}
		}
	});
		});

$(document).ready(function() 
		{
	new Chart(document.getElementById("bar-chart"), {
		type: 'bar',
		data: {
			labels: ["2013", "2014", "2015", "2016"],
			datasets: [
			           {
			        	   label: "Cost",
			        	   backgroundColor: "#3e95cd",
			        	   data: [
			                      randomScalingFactor(),
			                      randomScalingFactor(),
			                      randomScalingFactor(),
			                      randomScalingFactor(),
			                      randomScalingFactor(),
			                      randomScalingFactor(),
			                      randomScalingFactor()
			                  ]
			           }, {
			        	   label: "Earing",
			        	   backgroundColor: "#8e5ea2",
			        	   data: [
			                      randomScalingFactor(),
			                      randomScalingFactor(),
			                      randomScalingFactor(),
			                      randomScalingFactor(),
			                      randomScalingFactor(),
			                      randomScalingFactor(),
			                      randomScalingFactor()
			                  ]
			           }
			           ]
		},
		options: {
			title: {
				display: true,
				text: 'University Earing & Cost (in Millions)'
			}
		}
	});
		});
$(document).ready(function() 
		{
	var ctx = document.getElementById('myChart').getContext('2d');
	var myChart = new Chart(ctx, {
		type: 'line',
		data: {
			labels: ['M', 'T', 'W', 'T', 'F', 'S', 'S'],
			datasets: [{
				label: 'Cost',
				data: [
		                randomScalingFactor(),
		                randomScalingFactor(),
		                randomScalingFactor(),
		                randomScalingFactor(),
		                randomScalingFactor(),
		                randomScalingFactor(),
		                randomScalingFactor()
		            ],
				backgroundColor: "rgba(255,61,103,0.3)"
			}, {
				label: 'Earning',
				data: [
		                randomScalingFactor(),
		                randomScalingFactor(),
		                randomScalingFactor(),
		                randomScalingFactor(),
		                randomScalingFactor(),
		                randomScalingFactor(),
		                randomScalingFactor()
		            ],
				backgroundColor: "rgba(34,206,206,0.3)"
			}]
		}
	});
		});
jQuery(document).ready(function() {
    'use strict';
    require.config({
        paths: {
            echarts: "../assets/plugins/echarts"
        }
    }), require(["echarts", "echarts/chart/bar", "echarts/chart/chord", "echarts/chart/eventRiver", "echarts/chart/force", "echarts/chart/funnel", "echarts/chart/gauge", "echarts/chart/heatmap", "echarts/chart/k", "echarts/chart/line", "echarts/chart/map", "echarts/chart/pie", "echarts/chart/radar", "echarts/chart/scatter", "echarts/chart/tree", "echarts/chart/treemap", "echarts/chart/venn", "echarts/chart/wordCloud"], function(a) {
        var b = a.init(document.getElementById("echarts_bar"));
        b.setOption({
            tooltip: {
                trigger: "axis"
            },
            legend: {
                data: ["Cost", "Expenses"]
            },
            toolbox: {
                show: !0,
                orient: "vertical",
                feature: {
                    mark: {
                        show: !0
                    },
                    dataView: {
                        show: !0,
                        readOnly: !1
                    },
                    magicType: {
                        show: !0,
                        type: ["line", "bar"]
                    },
                    restore: {
                        show: !0
                    },
                    saveAsImage: {
                        show: !0
                    }
                }
            },
            calculable: !0,
            xAxis: [{
                type: "category",
                data: ["Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov", "Dec"]
            }],
            yAxis: [{
                type: "value",
                splitArea: {
                    show: !0
                }
            }],
            series: [{
                name: "Cost",
                type: "bar",
                data: [56, 14.9, 57, 2.69, 95, 26.7, 25.6, 102.2, 32.6, 20, 6.4, 3.3]
            }, {
                name: "Expenses",
                type: "bar",
                data: [45.6, 10.9, 59, 2.4, 78.7, 30.7, 35.6, 92.2, 48.7, 18.8, 6, 2.3]
            }]
        });
        var c = a.init(document.getElementById("echarts_line"));
        c.setOption({
            title: {
                text: "Weekly Weather",
                subtext: ""
            },
            tooltip: {
                trigger: "axis"
            },
            legend: {
                data: ["High", "Low"]
            },
            toolbox: {
                show: !0,
                orient: "vertical",
                feature: {
                    mark: {
                        show: !0
                    },
                    dataView: {
                        show: !0,
                        readOnly: !1
                    },
                    magicType: {
                        show: !0,
                        type: ["line", "bar"]
                    },
                    restore: {
                        show: !0
                    },
                    saveAsImage: {
                        show: !0
                    }
                }
            },
            calculable: !0,
            xAxis: [{
                type: "category",
                boundaryGap: !1,
                data: ["Mon", "Tue", "Wed", "Thu", "Fri", "Sat", "Sun"]
            }],
            yAxis: [{
                type: "value",
                axisLabel: {
                    formatter: "{value} °C"
                }
            }],
            series: [{
                name: "High",
                type: "line",
                data: [12, 10, 13, 15, 11, 12, 10],
                markPoint: {
                    data: [{
                        type: "max",
                        name: "Max"
                    }, {
                        type: "min",
                        name: "Min"
                    }]
                },
                markLine: {
                    data: [{
                        type: "average",
                        name: "Mean"
                    }]
                }
            }, {
                name: "Low",
                type: "line",
                data: [1, -2, 1, 4, 2, 3, 0],
                markPoint: {
                    data: [{
                        name: "Lowest",
                        value: -2,
                        xAxis: 1,
                        yAxis: -1.5
                    }]
                },
                markLine: {
                    data: [{
                        type: "average",
                        name: "Mean"
                    }]
                }
            }]
        });
        var d = a.init(document.getElementById("echarts_scatter"));
        d.setOption({
            title: {
                text: "Male and female height and weight distribution"
            },
            tooltip: {
                trigger: "axis",
                showDelay: 0,
                formatter: function(a) {
                    return a.value.length > 1 ? a.seriesName + " :<br/>" + a.value[0] + "cm " + a.value[1] + "kg " : a.seriesName + " :<br/>" + a.name + " : " + a.value + "kg "
                },
                axisPointer: {
                    show: !0,
                    type: "cross",
                    lineStyle: {
                        type: "dashed",
                        width: 1
                    }
                }
            },
            legend: {
                data: ["Female", "Male"]
            },
            toolbox: {
                show: !0,
                orient: "vertical",
                feature: {
                    mark: {
                        show: !0
                    },
                    dataZoom: {
                        show: !0
                    },
                    dataView: {
                        show: !0,
                        readOnly: !1
                    },
                    restore: {
                        show: !0
                    },
                    saveAsImage: {
                        show: !0
                    }
                }
            },
            xAxis: [{
                type: "value",
                scale: !0,
                axisLabel: {
                    formatter: "{value} cm"
                }
            }],
            yAxis: [{
                type: "value",
                scale: !0,
                axisLabel: {
                    formatter: "{value} kg"
                }
            }],
            series: [{
                name: "Female",
                type: "scatter",
                data: [
                    [161.2, 51.6],
                    [167.5, 59],
                    [159.5, 49.2],
                    [157, 63],
                    [155.8, 53.6],
                    [170, 59],
                    [159.1, 47.6],
                    [166, 69.8],
                    [176.2, 66.8],
                    [160.2, 75.2],
                    [172.5, 55.2],
                    [170.9, 54.2],
                    [172.9, 62.5],
                    [153.4, 42],
                    [160, 50],
                    [147.2, 49.8],
                    [168.2, 49.2],
                    [175, 73.2],
                    [157, 47.8],
                    [167.6, 68.8],
                    [159.5, 50.6],
                    [175, 82.5],
                    [166.8, 57.2],
                    [176.5, 87.8],
                    [170.2, 72.8],
                    [174, 54.5],
                    [173, 59.8],
                    [179.9, 67.3],
                    [170.5, 67.8],
                    [160, 47],
                    [154.4, 46.2],
                    [162, 55],
                    [176.5, 83],
                    [160, 54.4],
                    [152, 45.8],
                    [162.1, 53.6],
                    [170, 73.2],
                    [160.2, 52.1],
                    [161.3, 67.9],
                    [166.4, 56.6],
                    [168.9, 62.3],
                    [163.8, 58.5],
                    [167.6, 54.5],
                    [160, 50.2],
                    [161.3, 60.3],
                    [167.6, 58.3],
                    [165.1, 56.2],
                    [160, 50.2],
                    [170, 72.9],
                    [157.5, 59.8],
                    [167.6, 61],
                    [160.7, 69.1],
                    [163.2, 55.9],
                    [152.4, 46.5],
                    [157.5, 54.3],
                    [168.3, 54.8],
                    [180.3, 60.7],
                    [165.5, 60],
                    [165, 62],
                    [164.5, 60.3],
                    [156, 52.7],
                    [160, 74.3],
                    [163, 62],
                    [165.7, 73.1],
                    [161, 80],
                    [162, 54.7],
                    [166, 53.2],
                    [174, 75.7],
                    [172.7, 61.1],
                    [167.6, 55.7],
                    [151.1, 48.7],
                    [164.5, 52.3],
                    [163.5, 50],
                    [152, 59.3],
                    [169, 62.5],
                    [164, 55.7],
                    [161.2, 54.8],
                    [155, 45.9],
                    [170, 70.6],
                    [176.2, 67.2],
                    [170, 69.4],
                    [162.5, 58.2],
                    [170.3, 64.8],
                    [164.1, 71.6],
                    [169.5, 52.8],
                    [163.2, 59.8],
                    [154.5, 49],
                    [159.8, 50],
                    [173.2, 69.2],
                    [170, 55.9],
                    [161.4, 63.4],
                    [169, 58.2],
                    [166.2, 58.6],
                    [159.4, 45.7],
                    [162.5, 52.2],
                    [159, 48.6],
                    [162.8, 57.8],
                    [159, 55.6],
                    [179.8, 66.8],
                    [162.9, 59.4],
                    [161, 53.6],
                    [151.1, 73.2],
                    [168.2, 53.4],
                    [168.9, 69],
                    [173.2, 58.4],
                    [171.8, 56.2],
                    [178, 70.6],
                    [164.3, 59.8],
                    [163, 72],
                    [168.5, 65.2],
                    [166.8, 56.6],
                    [172.7, 105.2],
                    [163.5, 51.8],
                    [169.4, 63.4],
                    [167.8, 59],
                    [159.5, 47.6],
                    [167.6, 63],
                    [161.2, 55.2],
                    [160, 45],
                    [163.2, 54],
                    [162.2, 50.2],
                    [161.3, 60.2],
                    [149.5, 44.8],
                    [157.5, 58.8],
                    [163.2, 56.4],
                    [172.7, 62],
                    [155, 49.2],
                    [156.5, 67.2],
                    [164, 53.8],
                    [160.9, 54.4],
                    [162.8, 58],
                    [167, 59.8],
                    [160, 54.8],
                    [160, 43.2],
                    [168.9, 60.5],
                    [158.2, 46.4],
                    [156, 64.4],
                    [160, 48.8],
                    [167.1, 62.2],
                    [158, 55.5],
                    [167.6, 57.8],
                    [156, 54.6],
                    [162.1, 59.2],
                    [173.4, 52.7],
                    [159.8, 53.2],
                    [170.5, 64.5],
                    [159.2, 51.8],
                    [157.5, 56],
                    [161.3, 63.6],
                    [162.6, 63.2],
                    [160, 59.5],
                    [168.9, 56.8],
                    [165.1, 64.1],
                    [162.6, 50],
                    [165.1, 72.3],
                    [166.4, 55],
                    [160, 55.9],
                    [152.4, 60.4],
                    [170.2, 69.1],
                    [162.6, 84.5],
                    [170.2, 55.9],
                    [158.8, 55.5],
                    [172.7, 69.5],
                    [167.6, 76.4],
                    [162.6, 61.4],
                    [167.6, 65.9],
                    [156.2, 58.6],
                    [175.2, 66.8],
                    [172.1, 56.6],
                    [162.6, 58.6],
                    [160, 55.9],
                    [165.1, 59.1],
                    [182.9, 81.8],
                    [166.4, 70.7],
                    [165.1, 56.8],
                    [177.8, 60],
                    [165.1, 58.2],
                    [175.3, 72.7],
                    [154.9, 54.1],
                    [158.8, 49.1],
                    [172.7, 75.9],
                    [168.9, 55],
                    [161.3, 57.3],
                    [167.6, 55],
                    [165.1, 65.5],
                    [175.3, 65.5],
                    [157.5, 48.6],
                    [163.8, 58.6],
                    [167.6, 63.6],
                    [165.1, 55.2],
                    [165.1, 62.7],
                    [168.9, 56.6],
                    [162.6, 53.9],
                    [164.5, 63.2],
                    [176.5, 73.6],
                    [168.9, 62],
                    [175.3, 63.6],
                    [159.4, 53.2],
                    [160, 53.4],
                    [170.2, 55],
                    [162.6, 70.5],
                    [167.6, 54.5],
                    [162.6, 54.5],
                    [160.7, 55.9],
                    [160, 59],
                    [157.5, 63.6],
                    [162.6, 54.5],
                    [152.4, 47.3],
                    [170.2, 67.7],
                    [165.1, 80.9],
                    [172.7, 70.5],
                    [165.1, 60.9],
                    [170.2, 63.6],
                    [170.2, 54.5],
                    [170.2, 59.1],
                    [161.3, 70.5],
                    [167.6, 52.7],
                    [167.6, 62.7],
                    [165.1, 86.3],
                    [162.6, 66.4],
                    [152.4, 67.3],
                    [168.9, 63],
                    [170.2, 73.6],
                    [175.2, 62.3],
                    [175.2, 57.7],
                    [160, 55.4],
                    [165.1, 104.1],
                    [174, 55.5],
                    [170.2, 77.3],
                    [160, 80.5],
                    [167.6, 64.5],
                    [167.6, 72.3],
                    [167.6, 61.4],
                    [154.9, 58.2],
                    [162.6, 81.8],
                    [175.3, 63.6],
                    [171.4, 53.4],
                    [157.5, 54.5],
                    [165.1, 53.6],
                    [160, 60],
                    [174, 73.6],
                    [162.6, 61.4],
                    [174, 55.5],
                    [162.6, 63.6],
                    [161.3, 60.9],
                    [156.2, 60],
                    [149.9, 46.8],
                    [169.5, 57.3],
                    [160, 64.1],
                    [175.3, 63.6],
                    [169.5, 67.3],
                    [160, 75.5],
                    [172.7, 68.2],
                    [162.6, 61.4],
                    [157.5, 76.8],
                    [176.5, 71.8],
                    [164.4, 55.5],
                    [160.7, 48.6],
                    [174, 66.4],
                    [163.8, 67.3]
                ],
                markPoint: {
                    data: [{
                        type: "max",
                        name: "Maximum"
                    }, {
                        type: "min",
                        name: "Minimum"
                    }]
                },
                markLine: {
                    data: [{
                        type: "average",
                        name: "Average"
                    }]
                }
            }, {
                name: "Male",
                type: "scatter",
                data: [
                    [174, 65.6],
                    [175.3, 71.8],
                    [193.5, 80.7],
                    [186.5, 72.6],
                    [187.2, 78.8],
                    [181.5, 74.8],
                    [184, 86.4],
                    [184.5, 78.4],
                    [175, 62],
                    [184, 81.6],
                    [180, 76.6],
                    [177.8, 83.6],
                    [192, 90],
                    [176, 74.6],
                    [174, 71],
                    [184, 79.6],
                    [192.7, 93.8],
                    [171.5, 70],
                    [173, 72.4],
                    [176, 85.9],
                    [176, 78.8],
                    [180.5, 77.8],
                    [172.7, 66.2],
                    [176, 86.4],
                    [173.5, 81.8],
                    [178, 89.6],
                    [180.3, 82.8],
                    [180.3, 76.4],
                    [164.5, 63.2],
                    [173, 60.9],
                    [183.5, 74.8],
                    [175.5, 70],
                    [188, 72.4],
                    [189.2, 84.1],
                    [172.8, 69.1],
                    [170, 59.5],
                    [182, 67.2],
                    [170, 61.3],
                    [177.8, 68.6],
                    [184.2, 80.1],
                    [186.7, 87.8],
                    [171.4, 84.7],
                    [172.7, 73.4],
                    [175.3, 72.1],
                    [180.3, 82.6],
                    [182.9, 88.7],
                    [188, 84.1],
                    [177.2, 94.1],
                    [172.1, 74.9],
                    [167, 59.1],
                    [169.5, 75.6],
                    [174, 86.2],
                    [172.7, 75.3],
                    [182.2, 87.1],
                    [164.1, 55.2],
                    [163, 57],
                    [171.5, 61.4],
                    [184.2, 76.8],
                    [174, 86.8],
                    [174, 72.2],
                    [177, 71.6],
                    [186, 84.8],
                    [167, 68.2],
                    [171.8, 66.1],
                    [182, 72],
                    [167, 64.6],
                    [177.8, 74.8],
                    [164.5, 70],
                    [192, 101.6],
                    [175.5, 63.2],
                    [171.2, 79.1],
                    [181.6, 78.9],
                    [167.4, 67.7],
                    [181.1, 66],
                    [177, 68.2],
                    [174.5, 63.9],
                    [177.5, 72],
                    [170.5, 56.8],
                    [182.4, 74.5],
                    [197.1, 90.9],
                    [180.1, 93],
                    [175.5, 80.9],
                    [180.6, 72.7],
                    [184.4, 68],
                    [175.5, 70.9],
                    [180.6, 72.5],
                    [177, 72.5],
                    [177.1, 83.4],
                    [181.6, 75.5],
                    [176.5, 73],
                    [175, 70.2],
                    [174, 73.4],
                    [165.1, 70.5],
                    [177, 68.9],
                    [192, 102.3],
                    [176.5, 68.4],
                    [169.4, 65.9],
                    [182.1, 75.7],
                    [179.8, 84.5],
                    [175.3, 87.7],
                    [184.9, 86.4],
                    [177.3, 73.2],
                    [167.4, 53.9],
                    [178.1, 72],
                    [168.9, 55.5],
                    [157.2, 58.4],
                    [180.3, 83.2],
                    [170.2, 72.7],
                    [177.8, 64.1],
                    [172.7, 72.3],
                    [165.1, 65],
                    [186.7, 86.4],
                    [165.1, 65],
                    [174, 88.6],
                    [175.3, 84.1],
                    [185.4, 66.8],
                    [177.8, 75.5],
                    [180.3, 93.2],
                    [180.3, 82.7],
                    [177.8, 58],
                    [177.8, 79.5],
                    [177.8, 78.6],
                    [177.8, 71.8],
                    [177.8, 116.4],
                    [163.8, 72.2],
                    [188, 83.6],
                    [198.1, 85.5],
                    [175.3, 90.9],
                    [166.4, 85.9],
                    [190.5, 89.1],
                    [166.4, 75],
                    [177.8, 77.7],
                    [179.7, 86.4],
                    [172.7, 90.9],
                    [190.5, 73.6],
                    [185.4, 76.4],
                    [168.9, 69.1],
                    [167.6, 84.5],
                    [175.3, 64.5],
                    [170.2, 69.1],
                    [190.5, 108.6],
                    [177.8, 86.4],
                    [190.5, 80.9],
                    [177.8, 87.7],
                    [184.2, 94.5],
                    [176.5, 80.2],
                    [177.8, 72],
                    [180.3, 71.4],
                    [171.4, 72.7],
                    [172.7, 84.1],
                    [172.7, 76.8],
                    [177.8, 63.6],
                    [177.8, 80.9],
                    [182.9, 80.9],
                    [170.2, 85.5],
                    [167.6, 68.6],
                    [175.3, 67.7],
                    [165.1, 66.4],
                    [185.4, 102.3],
                    [181.6, 70.5],
                    [172.7, 95.9],
                    [190.5, 84.1],
                    [179.1, 87.3],
                    [175.3, 71.8],
                    [170.2, 65.9],
                    [193, 95.9],
                    [171.4, 91.4],
                    [177.8, 81.8],
                    [177.8, 96.8],
                    [167.6, 69.1],
                    [167.6, 82.7],
                    [180.3, 75.5],
                    [182.9, 79.5],
                    [176.5, 73.6],
                    [186.7, 91.8],
                    [188, 84.1],
                    [188, 85.9],
                    [177.8, 81.8],
                    [174, 82.5],
                    [177.8, 80.5],
                    [171.4, 70],
                    [185.4, 81.8],
                    [185.4, 84.1],
                    [188, 90.5],
                    [188, 91.4],
                    [182.9, 89.1],
                    [176.5, 85],
                    [175.3, 69.1],
                    [175.3, 73.6],
                    [188, 80.5],
                    [188, 82.7],
                    [175.3, 86.4],
                    [170.5, 67.7],
                    [179.1, 92.7],
                    [177.8, 93.6],
                    [175.3, 70.9],
                    [182.9, 75],
                    [170.8, 93.2],
                    [188, 93.2],
                    [180.3, 77.7],
                    [177.8, 61.4],
                    [185.4, 94.1],
                    [168.9, 75],
                    [185.4, 83.6],
                    [180.3, 85.5],
                    [174, 73.9],
                    [167.6, 66.8],
                    [182.9, 87.3],
                    [160, 72.3],
                    [180.3, 88.6],
                    [167.6, 75.5],
                    [186.7, 101.4],
                    [175.3, 91.1],
                    [175.3, 67.3],
                    [175.9, 77.7],
                    [175.3, 81.8],
                    [179.1, 75.5],
                    [181.6, 84.5],
                    [177.8, 76.6],
                    [182.9, 85],
                    [177.8, 102.5],
                    [184.2, 77.3],
                    [179.1, 71.8],
                    [176.5, 87.9],
                    [188, 94.3],
                    [174, 70.9],
                    [167.6, 64.5],
                    [170.2, 77.3],
                    [167.6, 72.3],
                    [188, 87.3],
                    [174, 80],
                    [176.5, 82.3],
                    [180.3, 73.6],
                    [167.6, 74.1],
                    [188, 85.9],
                    [180.3, 73.2],
                    [167.6, 76.3],
                    [183, 65.9],
                    [183, 90.9],
                    [179.1, 89.1],
                    [170.2, 62.3],
                    [177.8, 82.7],
                    [179.1, 79.1],
                    [190.5, 98.2],
                    [177.8, 84.1],
                    [180.3, 83.2],
                    [180.3, 83.2]
                ],
                markPoint: {
                    data: [{
                        type: "max",
                        name: "Maximum"
                    }, {
                        type: "min",
                        name: "Minimum"
                    }]
                },
                markLine: {
                    data: [{
                        type: "average",
                        name: "Average"
                    }]
                }
            }]
        });
        var e = a.init(document.getElementById("echarts_candle"));
        e.setOption({
            title: {
                text: ""
            },
            tooltip: {
                trigger: "axis",
                formatter: function(a) {
                    var b = a[0].seriesName + " " + a[0].name;
                    return b += "<br/>  opening : " + a[0].value[0] + "  highest : " + a[0].value[3], b += "<br/>  Close : " + a[0].value[1] + "  lowest : " + a[0].value[2]
                }
            },
            legend: {
                data: ["Composite Index"]
            },
            toolbox: {
                show: !0,
                orient: "vertical",
                feature: {
                    mark: {
                        show: !0
                    },
                    dataZoom: {
                        show: !0
                    },
                    dataView: {
                        show: !0,
                        readOnly: !1
                    },
                    magicType: {
                        show: !0,
                        type: ["line", "bar"]
                    },
                    restore: {
                        show: !0
                    },
                    saveAsImage: {
                        show: !0
                    }
                }
            },
            dataZoom: {
                show: !0,
                realtime: !0,
                start: 50,
                end: 100
            },
            xAxis: [{
                type: "category",
                boundaryGap: !0,
                axisTick: {
                    onGap: !1
                },
                splitLine: {
                    show: !1
                },
                data: ["2013/1/24", "2013/1/25", "2013/1/28", "2013/1/29", "2013/1/30", "2013/1/31", "2013/2/1", "2013/2/4", "2013/2/5", "2013/2/6", "2013/2/7", "2013/2/8", "2013/2/18", "2013/2/19", "2013/2/20", "2013/2/21", "2013/2/22", "2013/2/25", "2013/2/26", "2013/2/27", "2013/2/28", "2013/3/1", "2013/3/4", "2013/3/5", "2013/3/6", "2013/3/7", "2013/3/8", "2013/3/11", "2013/3/12", "2013/3/13", "2013/3/14", "2013/3/15", "2013/3/18", "2013/3/19", "2013/3/20", "2013/3/21", "2013/3/22", "2013/3/25", "2013/3/26", "2013/3/27", "2013/3/28", "2013/3/29", "2013/4/1", "2013/4/2", "2013/4/3", "2013/4/8", "2013/4/9", "2013/4/10", "2013/4/11", "2013/4/12", "2013/4/15", "2013/4/16", "2013/4/17", "2013/4/18", "2013/4/19", "2013/4/22", "2013/4/23", "2013/4/24", "2013/4/25", "2013/4/26", "2013/5/2", "2013/5/3", "2013/5/6", "2013/5/7", "2013/5/8", "2013/5/9", "2013/5/10", "2013/5/13", "2013/5/14", "2013/5/15", "2013/5/16", "2013/5/17", "2013/5/20", "2013/5/21", "2013/5/22", "2013/5/23", "2013/5/24", "2013/5/27", "2013/5/28", "2013/5/29", "2013/5/30", "2013/5/31", "2013/6/3", "2013/6/4", "2013/6/5", "2013/6/6", "2013/6/7", "2013/6/13"]
            }],
            yAxis: [{
                type: "value",
                scale: !0,
                boundaryGap: [.01, .01]
            }],
            series: [{
                name: "Composite Index",
                type: "k",
                data: [
                    [2320.26, 2302.6, 2287.3, 2362.94],
                    [2300, 2291.3, 2288.26, 2308.38],
                    [2295.35, 2346.5, 2295.35, 2346.92],
                    [2347.22, 2358.98, 2337.35, 2363.8],
                    [2360.75, 2382.48, 2347.89, 2383.76],
                    [2383.43, 2385.42, 2371.23, 2391.82],
                    [2377.41, 2419.02, 2369.57, 2421.15],
                    [2425.92, 2428.15, 2417.58, 2440.38],
                    [2411, 2433.13, 2403.3, 2437.42],
                    [2432.68, 2434.48, 2427.7, 2441.73],
                    [2430.69, 2418.53, 2394.22, 2433.89],
                    [2416.62, 2432.4, 2414.4, 2443.03],
                    [2441.91, 2421.56, 2415.43, 2444.8],
                    [2420.26, 2382.91, 2373.53, 2427.07],
                    [2383.49, 2397.18, 2370.61, 2397.94],
                    [2378.82, 2325.95, 2309.17, 2378.82],
                    [2322.94, 2314.16, 2308.76, 2330.88],
                    [2320.62, 2325.82, 2315.01, 2338.78],
                    [2313.74, 2293.34, 2289.89, 2340.71],
                    [2297.77, 2313.22, 2292.03, 2324.63],
                    [2322.32, 2365.59, 2308.92, 2366.16],
                    [2364.54, 2359.51, 2330.86, 2369.65],
                    [2332.08, 2273.4, 2259.25, 2333.54],
                    [2274.81, 2326.31, 2270.1, 2328.14],
                    [2333.61, 2347.18, 2321.6, 2351.44],
                    [2340.44, 2324.29, 2304.27, 2352.02],
                    [2326.42, 2318.61, 2314.59, 2333.67],
                    [2314.68, 2310.59, 2296.58, 2320.96],
                    [2309.16, 2286.6, 2264.83, 2333.29],
                    [2282.17, 2263.97, 2253.25, 2286.33],
                    [2255.77, 2270.28, 2253.31, 2276.22],
                    [2269.31, 2278.4, 2250, 2312.08],
                    [2267.29, 2240.02, 2239.21, 2276.05],
                    [2244.26, 2257.43, 2232.02, 2261.31],
                    [2257.74, 2317.37, 2257.42, 2317.86],
                    [2318.21, 2324.24, 2311.6, 2330.81],
                    [2321.4, 2328.28, 2314.97, 2332],
                    [2334.74, 2326.72, 2319.91, 2344.89],
                    [2318.58, 2297.67, 2281.12, 2319.99],
                    [2299.38, 2301.26, 2289, 2323.48],
                    [2273.55, 2236.3, 2232.91, 2273.55],
                    [2238.49, 2236.62, 2228.81, 2246.87],
                    [2229.46, 2234.4, 2227.31, 2243.95],
                    [2234.9, 2227.74, 2220.44, 2253.42],
                    [2232.69, 2225.29, 2217.25, 2241.34],
                    [2196.24, 2211.59, 2180.67, 2212.59],
                    [2215.47, 2225.77, 2215.47, 2234.73],
                    [2224.93, 2226.13, 2212.56, 2233.04],
                    [2236.98, 2219.55, 2217.26, 2242.48],
                    [2218.09, 2206.78, 2204.44, 2226.26],
                    [2199.91, 2181.94, 2177.39, 2204.99],
                    [2169.63, 2194.85, 2165.78, 2196.43],
                    [2195.03, 2193.8, 2178.47, 2197.51],
                    [2181.82, 2197.6, 2175.44, 2206.03],
                    [2201.12, 2244.64, 2200.58, 2250.11],
                    [2236.4, 2242.17, 2232.26, 2245.12],
                    [2242.62, 2184.54, 2182.81, 2242.62],
                    [2187.35, 2218.32, 2184.11, 2226.12],
                    [2213.19, 2199.31, 2191.85, 2224.63],
                    [2203.89, 2177.91, 2173.86, 2210.58],
                    [2170.78, 2174.12, 2161.14, 2179.65],
                    [2179.05, 2205.5, 2179.05, 2222.81],
                    [2212.5, 2231.17, 2212.5, 2236.07],
                    [2227.86, 2235.57, 2219.44, 2240.26],
                    [2242.39, 2246.3, 2235.42, 2255.21],
                    [2246.96, 2232.97, 2221.38, 2247.86],
                    [2228.82, 2246.83, 2225.81, 2247.67],
                    [2247.68, 2241.92, 2231.36, 2250.85],
                    [2238.9, 2217.01, 2205.87, 2239.93],
                    [2217.09, 2224.8, 2213.58, 2225.19],
                    [2221.34, 2251.81, 2210.77, 2252.87],
                    [2249.81, 2282.87, 2248.41, 2288.09],
                    [2286.33, 2299.99, 2281.9, 2309.39],
                    [2297.11, 2305.11, 2290.12, 2305.3],
                    [2303.75, 2302.4, 2292.43, 2314.18],
                    [2293.81, 2275.67, 2274.1, 2304.95],
                    [2281.45, 2288.53, 2270.25, 2292.59],
                    [2286.66, 2293.08, 2283.94, 2301.7],
                    [2293.4, 2321.32, 2281.47, 2322.1],
                    [2323.54, 2324.02, 2321.17, 2334.33],
                    [2316.25, 2317.75, 2310.49, 2325.72],
                    [2320.74, 2300.59, 2299.37, 2325.53],
                    [2300.21, 2299.25, 2294.11, 2313.43],
                    [2297.1, 2272.42, 2264.76, 2297.1],
                    [2270.71, 2270.93, 2260.87, 2276.86],
                    [2264.43, 2242.11, 2240.07, 2266.69],
                    [2242.26, 2210.9, 2205.07, 2250.63],
                    [2190.1, 2148.35, 2126.22, 2190.1]
                ]
            }]
        });
        var f = a.init(document.getElementById("echarts_pie"));
        f.setOption({
            tooltip: {
                trigger: "item",
                formatter: "{a} <br/>{b} : {c} ({d}%)"
            },
            legend: {
                orient: "vertical",
                x: "left",
                data: ["India", "United State", "Japan", "Germany", "Italy"]
            },
            toolbox: {
                show: !0,
                orient: "vertical",
                feature: {
                    mark: {
                        show: !0
                    },
                    dataView: {
                        show: !0,
                        readOnly: !1
                    },
                    magicType: {
                        show: !0,
                        type: ["pie", "funnel"],
                        option: {
                            funnel: {
                                x: "25%",
                                width: "50%",
                                funnelAlign: "left",
                                max: 1548
                            }
                        }
                    },
                    restore: {
                        show: !0
                    },
                    saveAsImage: {
                        show: !0
                    }
                }
            },
            calculable: !0,
            series: [{
                name: "pie_chart",
                type: "pie",
                radius: "55%",
                center: ["50%", "60%"],
                data: [{
                    value: 335,
                    name: "India"
                }, {
                    value: 310,
                    name: "United State"
                }, {
                    value: 234,
                    name: "Japan"
                }, {
                    value: 135,
                    name: "Germany"
                }, {
                    value: 1548,
                    name: "Italy"
                }]
            }]
        })
    })
});
jQuery(document).ready(function() {
    'use strict';
    new Morris.Line({
        element: "morris_chart_1",
        data: [{
            y: "2006",
            a: 98,
            b: 88
        }, {
            y: "2007",
            a: 71,
            b: 68
        }, {
            y: "2008",
            a: 49,
            b: 37
        }, {
            y: "2009",
            a: 70,
            b: 61
        }, {
            y: "2010",
            a: 45,
            b: 35
        }, {
            y: "2011",
            a: 68,
            b: 59
        }, {
            y: "2012",
            a: 100,
            b: 92
        }],
        xkey: "y",
        ykeys: ["a", "b"],
        labels: ["Values A", "Values B"],
        lineColors: ["#F08080", "#20B2AA"],
        pointFillColors: ["#F08080", "#20B2AA"]
    }), new Morris.Area({
        element: "morris_chart_2",
        data: [{
            y: "2006",
            a: 98,
            b: 88
        }, {
            y: "2007",
            a: 71,
            b: 68
        }, {
            y: "2008",
            a: 49,
            b: 37
        }, {
            y: "2009",
            a: 70,
            b: 61
        }, {
            y: "2010",
            a: 45,
            b: 35
        }, {
            y: "2011",
            a: 68,
            b: 59
        }, {
            y: "2012",
            a: 100,
            b: 92
        }],
        xkey: "y",
        ykeys: ["a", "b"],
        labels: ["Series A", "Series B"],
        lineColors: ["#72BBC5", "#F79263"]
    }), new Morris.Bar({
        element: "morris_chart_3",
        data: [{
            y: "2006",
            a: 98,
            b: 88
        }, {
            y: "2007",
            a: 71,
            b: 68
        }, {
            y: "2008",
            a: 49,
            b: 37
        }, {
            y: "2009",
            a: 70,
            b: 61
        }, {
            y: "2010",
            a: 45,
            b: 35
        }, {
            y: "2011",
            a: 68,
            b: 59
        }, {
            y: "2012",
            a: 100,
            b: 92
        }],
        xkey: "y",
        ykeys: ["a", "b"],
        labels: ["Series A", "Series B"],
        barColors: function(a, b, c) {
            return "a" == b.key ? "#1F77B4" : "#FF7F0E"
        }
    }), new Morris.Donut({
        element: "morris_chart_4",
        data: [{
            label: "Sales type 1",
            value: 38
        }, {
            label: "Sales type 2",
            value: 16
        }, {
            label: "Sales type 3",
            value: 27
        }],
        colors: ["#EAA228", "#4BB2C5", "#559BD7"]
    })
});
$(document).ready(function () {
  flatpickr("#date", {
    dateFormat: "d-m-Y",
    allowInput: true,
    onOpen: function (selectedDates, dateStr, instance) {
      instance.setDate(instance.input.value, false);
    },
  });

  flatpickr("#date1", {
    dateFormat: "d-m-Y",
    allowInput: true,
    onOpen: function (selectedDates, dateStr, instance) {
      instance.setDate(instance.input.value, false);
    },
  });

  flatpickr("#datetime", {
    enableTime: true,
    dateFormat: "Y-m-d H:i",
    onOpen: function (selectedDates, dateStr, instance) {
      instance.setDate(instance.input.value, false);
    },
  });

  flatpickr("#dateOfBirth", {
    dateFormat: "d-m-Y",
    allowInput: true,
    onOpen: function (selectedDates, dateStr, instance) {
      instance.setDate(instance.input.value, false);
    },
  });

  flatpickr("#therapyDate", {
    dateFormat: "d-m-Y",
    allowInput: true,
    onOpen: function (selectedDates, dateStr, instance) {
      instance.setDate(instance.input.value, false);
    },
  });

  if (document.getElementById("dateIcon")) {
    const nativeElement = document.getElementById("dateIcon");

    flatpickr(nativeElement, {
      dateFormat: "d-m-Y",
      allowInput: true,
      wrap: true,
    });
  }

  if (document.getElementById("dateIcon2")) {
    const nativeElement = document.getElementById("dateIcon2");

    flatpickr(nativeElement, {
      dateFormat: "d-m-Y",
      allowInput: true,
      wrap: true,
    });
  }

  flatpickr("#time", {
    enableTime: true,
    noCalendar: true,
    dateFormat: "H:i",
    onOpen: function (selectedDates, dateStr, instance) {
      instance.setDate(instance.input.value, false);
    },
  });
  flatpickr("#multiselectdate", {
    mode: "multiple",
    dateFormat: "Y-m-d",
    onOpen: function (selectedDates, dateStr, instance) {
      instance.setDate(instance.input.value, false);
    },
  });
  flatpickr("#daterange", {
    mode: "range",
    onOpen: function (selectedDates, dateStr, instance) {
      instance.setDate(instance.input.value, false);
    },
  });
});

/**
 *  Document   : material-loading.js
 *  Author     : redstar
 *  Description: script for material design loading page 
 *
 **/

document.querySelector('#p1').addEventListener('mdl-componentupgraded', function() {
	this.MaterialProgress.setProgress(44);
});

document.querySelector('#p3').addEventListener('mdl-componentupgraded', function() {
	this.MaterialProgress.setProgress(33);
	this.MaterialProgress.setBuffer(87);
});
$(document).ready(function() {
				$("#owl-demo").owlCarousel({
					autoPlay: 3000,
					navigation: true,
					slideSpeed: 300,
					paginationSpeed: 400,
					singleItem: true
				});
				$("#owl-demo2").owlCarousel({
					autoPlay: 3000,
					items: 4,
					itemsDesktop: [1199, 3],
					itemsDesktopSmall: [979, 3]
				});
			});
function format(state) {
    if (!state.id) return state.text; 
    return "<img class='flag' src='../assets/img/flags/" + state.id.toLowerCase() + ".png'/> &nbsp;" + state.text;
}

var placeholder = "Select a State";
$('.select2, .select2-multiple').select2({
	theme: "bootstrap",
    placeholder: placeholder,
});
$("#selitemIcon").select2({
	theme: "bootstrap",
	templateResult: format,
    formatSelection: format,
    escapeMarkup: function(m) {
        return m;
    }
});
$('.select2-allow-clear').select2({
	theme: "bootstrap",
    allowClear: true,
    placeholder: placeholder
});
$( "button[data-select2-open]" ).click( function() {
	$( "#" + $( this ).data( "select2-open" ) ).select2( "open" );
});

$( ":checkbox" ).on( "click", function() {
	$( this ).parent().nextAll( "select" ).prop( "disabled", !this.checked );
});




/**
 *  Document   : summernote-init.js
 *  Author     : redstar
 *  Description: script for set summernote properties
 *
 **/
$('#summernote').summernote({
        placeholder: '',
        tabsize: 2,
        tooltip: false,
        height: 150
      });
$('#formsummernote').summernote({
    placeholder: '',
    tabsize: 2,
    tooltip: false,
    height: 500
  });


$(function () {
  $(".btn-sweetalert button").on("click", function () {
    var type = $(this).data("type");
    if (type === "dialog1") {
      showDialog1();
    } else if (type === "dialog2") {
      showDialog2();
    } else if (type === "dialog3") {
      showDialog3();
    } else if (type === "dialog4") {
      showDialog4();
    } else if (type === "dialog5") {
      showDialog5();
    } else if (type === "dialog6") {
      showDialog6();
    } else if (type === "dialog7") {
      showDialog7();
    } else if (type === "dialog8") {
      showDialog8();
    } else if (type === "dialog9") {
      showDialog9();
    } else if (type === "dialog10") {
      showDialog10();
    }
  });
});

function showDialog1() {
  Swal.fire("Any fool can use a computer");
}

function showDialog2() {
  Swal.fire("The Internet?", "That thing is still around?", "question");
}

function showDialog3() {
  Swal.fire({
    icon: "error",
    title: "Oops...",
    text: "Something went wrong!",
    footer: "<a href>Why do I have this issue?</a>",
  });
}

function showDialog4() {
  Swal.fire({
    imageUrl: "https://placeholder.pics/svg/300x1500",
    imageHeight: 1500,
    imageAlt: "A tall image",
  });
}

function showDialog5() {
  Swal.fire({
    title: "<strong>HTML <u>example</u></strong>",
    icon: "info",
    html:
      "You can use <b>bold text</b>, " +
      '<a href="//sweetalert2.github.io">links</a> ' +
      "and other HTML tags",
    showCloseButton: true,
    showCancelButton: true,
    focusConfirm: false,
    confirmButtonText: '<i class="fa fa-thumbs-up"></i> Great!',
    confirmButtonAriaLabel: "Thumbs up, great!",
    cancelButtonText: '<i class="fa fa-thumbs-down"></i>',
    cancelButtonAriaLabel: "Thumbs down",
  });
}

function showDialog6() {
  Swal.fire({
    position: "bottom-end",
    icon: "success",
    title: "Your work has been saved",
    showConfirmButton: false,
    timer: 1500,
  });
}

function showDialog7() {
  Swal.fire({
    title: "Are you sure?",
    text: "You won't be able to revert this!",
    icon: "warning",
    showCancelButton: true,
    confirmButtonColor: "#3085d6",
    cancelButtonColor: "#d33",
    confirmButtonText: "Yes, delete it!",
  }).then((result) => {
    if (result.value) {
      Swal.fire("Deleted!", "Your file has been deleted.", "success");
    }
  });
}

function showDialog8() {
  Swal.fire({
    title: "Sweet!",
    text: "Modal with a custom image.",
    imageUrl: "https://unsplash.it/400/200",
    imageWidth: 400,
    imageHeight: 200,
    imageAlt: "Custom image",
  });
}

function showDialog9() {
  let timerInterval;
  Swal.fire({
    title: "Auto close alert!",
    html: "I will close in <b></b> milliseconds.",
    timer: 2000,
    timerProgressBar: true,
    onBeforeOpen: () => {
      Swal.showLoading();
      timerInterval = setInterval(() => {
        const content = Swal.getContent();
        if (content) {
          const b = content.querySelector("b");
          if (b) {
            b.textContent = Swal.getTimerLeft();
          }
        }
      }, 100);
    },
    onClose: () => {
      clearInterval(timerInterval);
    },
  }).then((result) => {
    /* Read more about handling dismissals below */
    if (result.dismiss === Swal.DismissReason.timer) {
      console.log("I was closed by the timer");
    }
  });
}

function showDialog10() {
  Swal.fire({
    title: "هل تريد الاستمرار؟",
    icon: "question",
    iconHtml: "؟",
    confirmButtonText: "نعم",
    cancelButtonText: "لا",
    showCancelButton: true,
    showCloseButton: true,
  });
}

/**
 *  Document   : table_data.js
 *  Author     : redstar
 *  Description: advance table page script
 *
 **/

$(document).ready(function() {
	'use strict';
    $('#example1').DataTable();
    
    var table = $('#example2').DataTable( {
        "scrollY": "200px",
        "paging": false
    } );
 
    $('a.toggle-vis').on( 'click', function (e) {
        e.preventDefault();
 
        // Get the column API object
        var column = table.column( $(this).attr('data-column') );
 
        // Toggle the visibility
        column.visible( ! column.visible() );
    } );
    
    var t = $('#example3').DataTable();
    var counter = 1;
 
    $('#addRow').on( 'click', function () {
        t.row.add( [
            counter +'.1',
            counter +'.2',
            counter +'.3',
            counter +'.4',
            counter +'.5'
        ] ).draw( false );
 
        counter++;
    } );
 
    // Automatically add a first row of data
    $('#addRow').click();
    
    $('#example4').DataTable();
    
    $('#saveStage').DataTable( {
        stateSave: true
    } );
    
    var table = $('#tableGroup').DataTable({
        "columnDefs": [
            { "visible": false, "targets": 2 }
        ],
        "order": [[ 2, 'asc' ]],
        "displayLength": 25,
        "drawCallback": function ( settings ) {
            var api = this.api();
            var rows = api.rows( {page:'current'} ).nodes();
            var last=null;
 
            api.column(2, {page:'current'} ).data().each( function ( group, i ) {
                if ( last !== group ) {
                    $(rows).eq( i ).before(
                        '<tr class="group"><td colspan="5">'+group+'</td></tr>'
                    );
 
                    last = group;
                }
            } );
        }
    } );
 
    // Order by the grouping
    $('#tableGroup tbody').on( 'click', 'tr.group', function () {
        var currentOrder = table.order()[0];
        if ( currentOrder[0] === 2 && currentOrder[1] === 'asc' ) {
            table.order( [ 2, 'desc' ] ).draw();
        }
        else {
            table.order( [ 2, 'asc' ] ).draw();
        }
    } );
    
    
    var dataSet = [
                   [ "Tiger Nixon", "System Architect", "Edinburgh", "5421", "2011/04/25", "$320,800" ],
                   [ "Garrett Winters", "Accountant", "Tokyo", "8422", "2011/07/25", "$170,750" ],
                   [ "Ashton Cox", "Junior Technical Author", "San Francisco", "1562", "2009/01/12", "$86,000" ],
                   [ "Cedric Kelly", "Senior Javascript Developer", "Edinburgh", "6224", "2012/03/29", "$433,060" ],
                   [ "Airi Satou", "Accountant", "Tokyo", "5407", "2008/11/28", "$162,700" ],
                   [ "Brielle Williamson", "Integration Specialist", "New York", "4804", "2012/12/02", "$372,000" ],
                   [ "Herrod Chandler", "Sales Assistant", "San Francisco", "9608", "2012/08/06", "$137,500" ],
                   [ "Rhona Davidson", "Integration Specialist", "Tokyo", "6200", "2010/10/14", "$327,900" ],
                   [ "Colleen Hurst", "Javascript Developer", "San Francisco", "2360", "2009/09/15", "$205,500" ],
                   [ "Sonya Frost", "Software Engineer", "Edinburgh", "1667", "2008/12/13", "$103,600" ],
                   [ "Jena Gaines", "Office Manager", "London", "3814", "2008/12/19", "$90,560" ],
                   [ "Quinn Flynn", "Support Lead", "Edinburgh", "9497", "2013/03/03", "$342,000" ],
                   [ "Charde Marshall", "Regional Director", "San Francisco", "6741", "2008/10/16", "$470,600" ],
                   [ "Haley Kennedy", "Senior Marketing Designer", "London", "3597", "2012/12/18", "$313,500" ],
                   [ "Tatyana Fitzpatrick", "Regional Director", "London", "1965", "2010/03/17", "$385,750" ],
                   [ "Michael Silva", "Marketing Designer", "London", "1581", "2012/11/27", "$198,500" ],
                   [ "Paul Byrd", "Chief Financial Officer (CFO)", "New York", "3059", "2010/06/09", "$725,000" ],
                   [ "Gloria Little", "Systems Administrator", "New York", "1721", "2009/04/10", "$237,500" ],
                   [ "Bradley Greer", "Software Engineer", "London", "2558", "2012/10/13", "$132,000" ],
                   [ "Dai Rios", "Personnel Lead", "Edinburgh", "2290", "2012/09/26", "$217,500" ],
                   [ "Jenette Caldwell", "Development Lead", "New York", "1937", "2011/09/03", "$345,000" ],
                   [ "Yuri Berry", "Chief Marketing Officer (CMO)", "New York", "6154", "2009/06/25", "$675,000" ],
                   [ "Caesar Vance", "Pre-Sales Support", "New York", "8330", "2011/12/12", "$106,450" ],
                   [ "Doris Wilder", "Sales Assistant", "Sidney", "3023", "2010/09/20", "$85,600" ],
                   [ "Angelica Ramos", "Chief Executive Officer (CEO)", "London", "5797", "2009/10/09", "$1,200,000" ],
                   [ "Gavin Joyce", "Developer", "Edinburgh", "8822", "2010/12/22", "$92,575" ],
                   [ "Jennifer Chang", "Regional Director", "Singapore", "9239", "2010/11/14", "$357,650" ],
                   [ "Brenden Wagner", "Software Engineer", "San Francisco", "1314", "2011/06/07", "$206,850" ],
                   [ "Fiona Green", "Chief Operating Officer (COO)", "San Francisco", "2947", "2010/03/11", "$850,000" ],
                   [ "Shou Itou", "Regional Marketing", "Tokyo", "8899", "2011/08/14", "$163,000" ],
                   [ "Michelle House", "Integration Specialist", "Sidney", "2769", "2011/06/02", "$95,400" ],
                   [ "Suki Burks", "Developer", "London", "6832", "2009/10/22", "$114,500" ],
                   [ "Prescott Bartlett", "Technical Author", "London", "3606", "2011/05/07", "$145,000" ],
                   [ "Gavin Cortez", "Team Leader", "San Francisco", "2860", "2008/10/26", "$235,500" ],
                   [ "Martena Mccray", "Post-Sales support", "Edinburgh", "8240", "2011/03/09", "$324,050" ],
                   [ "Unity Butler", "Marketing Designer", "San Francisco", "5384", "2009/12/09", "$85,675" ]
               ];
                
		    $('#dataTable').DataTable( {
		        data: dataSet,
		        columns: [
		            { title: "Name" },
		            { title: "Position" },
		            { title: "Office" },
		            { title: "Extn." },
		            { title: "Start date" },
		            { title: "Salary" }
		        ]
		    } );
		    
		    $('#exportTable').DataTable( {
		        dom: 'Bfrtip',
		        buttons: [
		            'copy', 'csv', 'excel', 'pdf', 'print'
		        ]
		    } );
		    
		    
		    
		    var childData =  [
		                      {
		                    	  "id": "1",
		                    	  "name": "Tiger Nixon",
		                    	  "position": "System Architect",
		                    	  "salary": "$320,800",
		                    	  "start_date": "2011/04/25",
		                    	  "office": "Edinburgh",
		                    	  "extn": "5421"
		                      },
		                      {
		                    	  "id": "2",
		                    	  "name": "Garrett Winters",
		                    	  "position": "Accountant",
		                    	  "salary": "$170,750",
		                    	  "start_date": "2011/07/25",
		                    	  "office": "Tokyo",
		                    	  "extn": "8422"
		                      },
		                      {
		                    	  "id": "3",
		                    	  "name": "Ashton Cox",
		                    	  "position": "Junior Technical Author",
		                    	  "salary": "$86,000",
		                    	  "start_date": "2009/01/12",
		                    	  "office": "San Francisco",
		                    	  "extn": "1562"
		                      }, 
		                      {
		                    	  "id": "4",
		                    	  "name": "Cedric Kelly",
		                    	  "position": "Senior Javascript Developer",
		                    	  "salary": "$433,060",
		                    	  "start_date": "2012/03/29",
		                    	  "office": "Edinburgh",
		                    	  "extn": "6224"
		                      },
		                      {
		                    	  "id": "5",
		                    	  "name": "Airi Satou",
		                    	  "position": "Accountant",
		                    	  "salary": "$162,700",
		                    	  "start_date": "2008/11/28",
		                    	  "office": "Tokyo",
		                    	  "extn": "5407"
		                      },
		                      {
		                    	  "id": "6",
		                    	  "name": "Brielle Williamson",
		                    	  "position": "Integration Specialist",
		                    	  "salary": "$372,000",
		                    	  "start_date": "2012/12/02",
		                    	  "office": "New York",
		                    	  "extn": "4804"
		                      },
		                      {
		                    	  "id": "7",
		                    	  "name": "Herrod Chandler",
		                    	  "position": "Sales Assistant",
		                    	  "salary": "$137,500",
		                    	  "start_date": "2012/08/06",
		                    	  "office": "San Francisco",
		                    	  "extn": "9608"
		                      },
		                      {
		                    	  "id": "8",
		                    	  "name": "Rhona Davidson",
		                    	  "position": "Integration Specialist",
		                    	  "salary": "$327,900",
		                    	  "start_date": "2010/10/14",
		                    	  "office": "Tokyo",
		                    	  "extn": "6200"
		                      },
		                      {
		                    	  "id": "9",
		                    	  "name": "Colleen Hurst",
		                    	  "position": "Javascript Developer",
		                    	  "salary": "$205,500",
		                    	  "start_date": "2009/09/15",
		                    	  "office": "San Francisco",
		                    	  "extn": "2360"
		                      },
		                      {
		                    	  "id": "10",
		                    	  "name": "Sonya Frost",
		                    	  "position": "Software Engineer",
		                    	  "salary": "$103,600",
		                    	  "start_date": "2008/12/13",
		                    	  "office": "Edinburgh",
		                    	  "extn": "1667"
		                      },
		                      {
		                    	  "id": "11",
		                    	  "name": "Jena Gaines",
		                    	  "position": "Office Manager",
		                    	  "salary": "$90,560",
		                    	  "start_date": "2008/12/19",
		                    	  "office": "London",
		                    	  "extn": "3814"
		                      },
		                      {
		                    	  "id": "12",
		                    	  "name": "Quinn Flynn",
		                    	  "position": "Support Lead",
		                    	  "salary": "$342,000",
		                    	  "start_date": "2013/03/03",
		                    	  "office": "Edinburgh",
		                    	  "extn": "9497"
		                      },
		                      {
		                    	  "id": "13",
		                    	  "name": "Charde Marshall",
		                    	  "position": "Regional Director",
		                    	  "salary": "$470,600",
		                    	  "start_date": "2008/10/16",
		                    	  "office": "San Francisco",
		                    	  "extn": "6741"
		                      },
		                      {
		                    	  "id": "14",
		                    	  "name": "Haley Kennedy",
		                    	  "position": "Senior Marketing Designer",
		                    	  "salary": "$313,500",
		                    	  "start_date": "2012/12/18",
		                    	  "office": "London",
		                    	  "extn": "3597"
		                      },
		                      {
		                    	  "id": "15",
		                    	  "name": "Tatyana Fitzpatrick",
		                    	  "position": "Regional Director",
		                    	  "salary": "$385,750",
		                    	  "start_date": "2010/03/17",
		                    	  "office": "London",
		                    	  "extn": "1965"
		                      },
		                      {
		                    	  "id": "16",
		                    	  "name": "Michael Silva",
		                    	  "position": "Marketing Designer",
		                    	  "salary": "$198,500",
		                    	  "start_date": "2012/11/27",
		                    	  "office": "London",
		                    	  "extn": "1581"
		                      },
		                      {
		                    	  "id": "17",
		                    	  "name": "Paul Byrd",
		                    	  "position": "Chief Financial Officer (CFO)",
		                    	  "salary": "$725,000",
		                    	  "start_date": "2010/06/09",
		                    	  "office": "New York",
		                    	  "extn": "3059"
		                      },
		                      {
		                    	  "id": "18",
		                    	  "name": "Gloria Little",
		                    	  "position": "Systems Administrator",
		                    	  "salary": "$237,500",
		                    	  "start_date": "2009/04/10",
		                    	  "office": "New York",
		                    	  "extn": "1721"
		                      },
		                      {
		                    	  "id": "19",
		                    	  "name": "Bradley Greer",
		                    	  "position": "Software Engineer",
		                    	  "salary": "$132,000",
		                    	  "start_date": "2012/10/13",
		                    	  "office": "London",
		                    	  "extn": "2558"
		                      },
		                      {
		                    	  "id": "20",
		                    	  "name": "Dai Rios",
		                    	  "position": "Personnel Lead",
		                    	  "salary": "$217,500",
		                    	  "start_date": "2012/09/26",
		                    	  "office": "Edinburgh",
		                    	  "extn": "2290"
		                      }

		                      ];


		    
		    /* Formatting function for row details - modify as you need */
		    function format ( d ) {
		        // `d` is the original data object for the row
		        return '<table cellpadding="5" cellspacing="0" border="0" style="padding-left:50px;">'+
		            '<tr>'+
		                '<td>Full name:</td>'+
		                '<td>'+d.name+'</td>'+
		            '</tr>'+
		            '<tr>'+
		                '<td>Extension number:</td>'+
		                '<td>'+d.extn+'</td>'+
		            '</tr>'+
		            '<tr>'+
		                '<td>Extra info:</td>'+
		                '<td>And any further details here (images etc)...</td>'+
		            '</tr>'+
		        '</table>';
		    }
		    
		    
		    
		        var table = $('#chieldRow').DataTable( {
		        	data: childData,
		            "columns": [
		                {
		                    "className":      'details-control',
		                    "orderable":      false,
		                    "data":           null,
		                    "defaultContent": ''
		                },
		                { "data": "name" },
		                { "data": "position" },
		                { "data": "office" },
		                { "data": "salary" }
		            ],
		            "order": [[1, 'asc']]
		        } );
		         
		        // Add event listener for opening and closing details
		        $('#chieldRow tbody').on('click', 'td.details-control', function () {
		            var tr = $(this).closest('tr');
		            var row = table.row( tr );
		     
		            if ( row.child.isShown() ) {
		                // This row is already open - close it
		                row.child.hide();
		                tr.removeClass('shown');
		            }
		            else {
		                // Open this row
		                row.child( format(row.data()) ).show();
		                tr.addClass('shown');
		            }
		        } );
		    
} );
/**
 *  Document   : treeview_data.js
 *  Author     : redstar
 *  Description: script for treeview data
 *
 **/

$(function() {
            var defaultData = [{
                text: 'Parent 1',
                href: '#parent1',
                tags: ['4'],
                nodes: [{
                    text: 'Child 1',
                    href: '#child1',
                    tags: ['2'],
                    nodes: [{
                        text: 'Grandchild 1',
                        href: '#grandchild1',
                        tags: ['0']
                    }, {
                        text: 'Grandchild 2',
                        href: '#grandchild2',
                        tags: ['0']
                    }]
                }, {
                    text: 'Child 2',
                    href: '#child2',
                    tags: ['0']
                }]
            }, {
                text: 'Parent 2',
                href: '#parent2',
                tags: ['0']
            }, {
                text: 'Parent 3',
                href: '#parent3',
                tags: ['0']
            }, {
                text: 'Parent 4',
                href: '#parent4',
                tags: ['0']
            }, {
                text: 'Parent 5',
                href: '#parent5',
                tags: ['0']
            }];
            var alternateData = [{
                text: 'Parent 1',
                tags: ['2'],
                nodes: [{
                    text: 'Child 1',
                    tags: ['3'],
                    nodes: [{
                        text: 'Grandchild 1',
                        tags: ['6']
                    }, {
                        text: 'Grandchild 2',
                        tags: ['3']
                    }]
                }, {
                    text: 'Child 2',
                    tags: ['3']
                }]
            }, {
                text: 'Parent 2',
                tags: ['7']
            }, {
                text: 'Parent 3',
                icon: 'glyphicon glyphicon-earphone',
                href: '#demo',
                tags: ['11']
            }, {
                text: 'Parent 4',
                icon: 'glyphicon glyphicon-cloud-download',
                href: '/demo.html',
                tags: ['19'],
                selected: true
            }, {
                text: 'Parent 5',
                icon: 'glyphicon glyphicon-certificate',
                color: 'pink',
                backColor: 'red',
                href: 'http://www.tesco.com',
                tags: ['available', '0']
            }];
            var json = '[' +
                '{' +
                '"text": "Parent 1",' +
                '"nodes": [' +
                '{' +
                '"text": "Child 1",' +
                '"nodes": [' +
                '{' +
                '"text": "Grandchild 1"' +
                '},' +
                '{' +
                '"text": "Grandchild 2"' +
                '}' +
                ']' +
                '},' +
                '{' +
                '"text": "Child 2"' +
                '}' +
                ']' +
                '},' +
                '{' +
                '"text": "Parent 2"' +
                '},' +
                '{' +
                '"text": "Parent 3"' +
                '},' +
                '{' +
                '"text": "Parent 4"' +
                '},' +
                '{' +
                '"text": "Parent 5"' +
                '}' +
                ']';
            $('#treeview1').treeview({
                data: defaultData
            });
            $('#treeview2').treeview({
                levels: 1,
                data: defaultData
            });
            $('#treeview3').treeview({
                levels: 99,
                data: defaultData
            });
            $('#treeview4').treeview({
                color: "#428bca",
                data: defaultData
            });
            $('#treeview5').treeview({
                color: "#428bca",
                expandIcon: 'fa fa-chevron-right',
                collapseIcon: 'fa fa-chevron-down',
                nodeIcon: 'fa fa-bookmark',
                data: defaultData
            });
            $('#treeview6').treeview({
                color: "#428bca",
                expandIcon: "fa fa-stop",
                collapseIcon: "fa fa-square-o",
                nodeIcon: "fa fa-user",
                showTags: true,
                data: defaultData
            });
            $('#treeview7').treeview({
                color: "#428bca",
                showBorder: false,
                data: defaultData
            });
            $('#treeview8').treeview({
                expandIcon: "fa fa-stop",
                collapseIcon: "fa fa-square-o",
                nodeIcon: "fa fa-user",
                color: "yellow",
                backColor: "#f36a5a",
                onhoverColor: "orange",
                borderColor: "red",
                showBorder: false,
                showTags: true,
                highlightSelected: true,
                selectedColor: "yellow",
                selectedBackColor: "darkorange",
                data: defaultData
            });
            $('#treeview9').treeview({
            	 expandIcon: "fa fa-stop",
                 collapseIcon: "fa fa-square-o",
                 nodeIcon: "fa fa-user",
                color: "white",
                backColor: "#1bbc9b",
                onhoverColor: "orange",
                borderColor: "red",
                showBorder: false,
                showTags: true,
                highlightSelected: true,
                selectedColor: "yellow",
                selectedBackColor: "darkorange",
                data: alternateData
            });
            $('#treeview10').treeview({
                color: "#428bca",
                enableLinks: true,
                data: defaultData
            });
            var $searchableTree = $('#treeview-searchable').treeview({
                data: defaultData,
            });
            var search = function(e) {
                var pattern = $('#input-search').val();
                var options = {
                    ignoreCase: $('#chk-ignore-case').is(':checked'),
                    exactMatch: $('#chk-exact-match').is(':checked'),
                    revealResults: $('#chk-reveal-results').is(':checked')
                };
                var results = $searchableTree.treeview('search', [pattern, options]);
                var output = '<p>' + results.length + ' matches found</p>';
                $.each(results, function(index, result) {
                    output += '<p>- ' + result.text + '</p>';
                });
                $('#search-output').html(output);
            }
            $('#btn-search').on('click', search);
            $('#input-search').on('keyup', search);
            $('#btn-clear-search').on('click', function(e) {
                $searchableTree.treeview('clearSearch');
                $('#input-search').val('');
                $('#search-output').html('');
            });
            var initSelectableTree = function() {
                return $('#treeview-selectable').treeview({
                    data: defaultData,
                    multiSelect: $('#chk-select-multi').is(':checked'),
                    onNodeSelected: function(event, node) {
                        $('#selectable-output').prepend('<p>' + node.text + ' was selected</p>');
                    },
                    onNodeUnselected: function(event, node) {
                        $('#selectable-output').prepend('<p>' + node.text + ' was unselected</p>');
                    }
                });
            };
            var $selectableTree = initSelectableTree();
            var findSelectableNodes = function() {
                return $selectableTree.treeview('search', [$('#input-select-node').val(), {
                    ignoreCase: false,
                    exactMatch: false
                }]);
            };
            var selectableNodes = findSelectableNodes();
            $('#chk-select-multi:checkbox').on('change', function() {
                console.log('multi-select change');
                $selectableTree = initSelectableTree();
                selectableNodes = findSelectableNodes();
            });
            // Select/unselect/toggle nodes
            $('#input-select-node').on('keyup', function(e) {
                selectableNodes = findSelectableNodes();
                $('.select-node').prop('disabled', !(selectableNodes.length >= 1));
            });
            $('#btn-select-node.select-node').on('click', function(e) {
                $selectableTree.treeview('selectNode', [selectableNodes, {
                    silent: $('#chk-select-silent').is(':checked')
                }]);
            });
            $('#btn-unselect-node.select-node').on('click', function(e) {
                $selectableTree.treeview('unselectNode', [selectableNodes, {
                    silent: $('#chk-select-silent').is(':checked')
                }]);
            });
            $('#btn-toggle-selected.select-node').on('click', function(e) {
                $selectableTree.treeview('toggleNodeSelected', [selectableNodes, {
                    silent: $('#chk-select-silent').is(':checked')
                }]);
            });
            var $expandibleTree = $('#treeview-expandible').treeview({
                data: defaultData,
                onNodeCollapsed: function(event, node) {
                    $('#expandible-output').prepend('<p>' + node.text + ' was collapsed</p>');
                },
                onNodeExpanded: function(event, node) {
                    $('#expandible-output').prepend('<p>' + node.text + ' was expanded</p>');
                }
            });
            var findExpandibleNodess = function() {
                return $expandibleTree.treeview('search', [$('#input-expand-node').val(), {
                    ignoreCase: false,
                    exactMatch: false
                }]);
            };
            var expandibleNodes = findExpandibleNodess();
            // Expand/collapse/toggle nodes
            $('#input-expand-node').on('keyup', function(e) {
                expandibleNodes = findExpandibleNodess();
                $('.expand-node').prop('disabled', !(expandibleNodes.length >= 1));
            });
            $('#btn-expand-node.expand-node').on('click', function(e) {
                var levels = $('#select-expand-node-levels').val();
                $expandibleTree.treeview('expandNode', [expandibleNodes, {
                    levels: levels,
                    silent: $('#chk-expand-silent').is(':checked')
                }]);
            });
            $('#btn-collapse-node.expand-node').on('click', function(e) {
                $expandibleTree.treeview('collapseNode', [expandibleNodes, {
                    silent: $('#chk-expand-silent').is(':checked')
                }]);
            });
            $('#btn-toggle-expanded.expand-node').on('click', function(e) {
                $expandibleTree.treeview('toggleNodeExpanded', [expandibleNodes, {
                    silent: $('#chk-expand-silent').is(':checked')
                }]);
            });
            // Expand/collapse all
            $('#btn-expand-all').on('click', function(e) {
                var levels = $('#select-expand-all-levels').val();
                $expandibleTree.treeview('expandAll', {
                    levels: levels,
                    silent: $('#chk-expand-silent').is(':checked')
                });
            });
            $('#btn-collapse-all').on('click', function(e) {
                $expandibleTree.treeview('collapseAll', {
                    silent: $('#chk-expand-silent').is(':checked')
                });
            });
            var $checkableTree = $('#treeview-checkable').treeview({
                data: defaultData,
                showIcon: false,
                showCheckbox: true,
                onNodeChecked: function(event, node) {
                    $('#checkable-output').prepend('<p>' + node.text + ' was checked</p>');
                },
                onNodeUnchecked: function(event, node) {
                    $('#checkable-output').prepend('<p>' + node.text + ' was unchecked</p>');
                }
            });
            var findCheckableNodess = function() {
                return $checkableTree.treeview('search', [$('#input-check-node').val(), {
                    ignoreCase: false,
                    exactMatch: false
                }]);
            };
            var checkableNodes = findCheckableNodess();
            // Check/uncheck/toggle nodes
            $('#input-check-node').on('keyup', function(e) {
                checkableNodes = findCheckableNodess();
                $('.check-node').prop('disabled', !(checkableNodes.length >= 1));
            });
            $('#btn-check-node.check-node').on('click', function(e) {
                $checkableTree.treeview('checkNode', [checkableNodes, {
                    silent: $('#chk-check-silent').is(':checked')
                }]);
            });
            $('#btn-uncheck-node.check-node').on('click', function(e) {
                $checkableTree.treeview('uncheckNode', [checkableNodes, {
                    silent: $('#chk-check-silent').is(':checked')
                }]);
            });
            $('#btn-toggle-checked.check-node').on('click', function(e) {
                $checkableTree.treeview('toggleNodeChecked', [checkableNodes, {
                    silent: $('#chk-check-silent').is(':checked')
                }]);
            });
            // Check/uncheck all
            $('#btn-check-all').on('click', function(e) {
                $checkableTree.treeview('checkAll', {
                    silent: $('#chk-check-silent').is(':checked')
                });
            });
            $('#btn-uncheck-all').on('click', function(e) {
                $checkableTree.treeview('uncheckAll', {
                    silent: $('#chk-check-silent').is(':checked')
                });
            });
            var $disabledTree = $('#treeview-disabled').treeview({
                data: defaultData,
                onNodeDisabled: function(event, node) {
                    $('#disabled-output').prepend('<p>' + node.text + ' was disabled</p>');
                },
                onNodeEnabled: function(event, node) {
                    $('#disabled-output').prepend('<p>' + node.text + ' was enabled</p>');
                },
                onNodeCollapsed: function(event, node) {
                    $('#disabled-output').prepend('<p>' + node.text + ' was collapsed</p>');
                },
                onNodeUnchecked: function(event, node) {
                    $('#disabled-output').prepend('<p>' + node.text + ' was unchecked</p>');
                },
                onNodeUnselected: function(event, node) {
                    $('#disabled-output').prepend('<p>' + node.text + ' was unselected</p>');
                }
            });
            var findDisabledNodes = function() {
                return $disabledTree.treeview('search', [$('#input-disable-node').val(), {
                    ignoreCase: false,
                    exactMatch: false
                }]);
            };
            var disabledNodes = findDisabledNodes();
            // Expand/collapse/toggle nodes
            $('#input-disable-node').on('keyup', function(e) {
                disabledNodes = findDisabledNodes();
                $('.disable-node').prop('disabled', !(disabledNodes.length >= 1));
            });
            $('#btn-disable-node.disable-node').on('click', function(e) {
                $disabledTree.treeview('disableNode', [disabledNodes, {
                    silent: $('#chk-disable-silent').is(':checked')
                }]);
            });
            $('#btn-enable-node.disable-node').on('click', function(e) {
                $disabledTree.treeview('enableNode', [disabledNodes, {
                    silent: $('#chk-disable-silent').is(':checked')
                }]);
            });
            $('#btn-toggle-disabled.disable-node').on('click', function(e) {
                $disabledTree.treeview('toggleNodeDisabled', [disabledNodes, {
                    silent: $('#chk-disable-silent').is(':checked')
                }]);
            });
            // Expand/collapse all
            $('#btn-disable-all').on('click', function(e) {
                $disabledTree.treeview('disableAll', {
                    silent: $('#chk-disable-silent').is(':checked')
                });
            });
            $('#btn-enable-all').on('click', function(e) {
                $disabledTree.treeview('enableAll', {
                    silent: $('#chk-disable-silent').is(':checked')
                });
            });
            var $tree = $('#treeview12').treeview({
                data: json
            });
        });
/**
 *  Document   : form-validation.js
 *  Author     : redstar
 *  Description: Script related to validate the form
 *
 **/
var FormValidation = function () {

    // basic validation
    var handleValidation1 = function() {
        // for more info visit the official plugin documentation: 
            // http://docs.jquery.com/Plugins/Validation

            var form1 = $('#form_sample_1');

            form1.validate({
                errorElement: 'span', //default input error message container
                errorClass: 'help-block help-block-error', // default input error message class
                focusInvalid: false, // do not focus the last invalid input
                ignore: "",  // validate all fields including form hidden input
                messages: {
                    select_multi: {
                        maxlength: jQuery.validator.format("Max {0} items allowed for selection"),
                        minlength: jQuery.validator.format("At least {0} items must be selected")
                    }
                },
                rules: {
                    name: {
                        minlength: 2,
                        required: true
                    },
                    
                    email: {
                        required: true,
                        email: true
                    },
                    url: {
                        required: true,
                        url: true
                    },
                    number: {
                        required: true,
                        number: true
                    },
                    digits: {
                        required: true,
                        digits: true
                    },
                    creditcard: {
                        required: true,
                        creditcard: true
                    },
                    occupation: {
                        minlength: 5,
                    },
                    select: {
                        required: true
                    },
                    
                },

                invalidHandler: function (event, validator) { //display error alert on form submit              
                    success1.hide();
                    error1.show();
                    App.scrollTo(error1, -200);
                },

                errorPlacement: function (error, element) { // render error placement for each input type
                    var cont = $(element).parent('.input-group');
                    if (cont) {
                        cont.after(error);
                    } else {
                        element.after(error);
                    }
                },

                highlight: function (element) { // hightlight error inputs
                	$(element).closest('.form-group').removeClass('has-success').addClass('has-error'); // set error class to the control group
                },

                unhighlight: function (element) { // revert the change done by hightlight
                    $(element).closest('.form-group').removeClass('has-error').addClass('has-success'); // set error class to the control group
                },

                success: function (label) {
                    label.closest('.form-group').removeClass('has-error').addClass('has-success'); // set success class to the control group
                },

                submitHandler: function (form) {
                    success1.show();
                    error1.hide();
                }
            });


    }

    // validation using icons
    var handleValidation2 = function() {
        // for more info visit the official plugin documentation: 
            // http://docs.jquery.com/Plugins/Validation

            var form2 = $('#form_sample_2');
            var error2 = $('.alert-danger', form2);
            var success2 = $('.alert-success', form2);

            form2.validate({
                errorElement: 'span', //default input error message container
                errorClass: 'help-block help-block-error', // default input error message class
                focusInvalid: false, // do not focus the last invalid input
                ignore: "",  // validate all fields including form hidden input
                rules: {
                    name: {
                        minlength: 2,
                        required: true
                    },
                    email: {
                        required: true,
                        email: true
                    },
                    email: {
                        required: true,
                        email: true
                    },
                    url: {
                        required: true,
                        url: true
                    },
                    number: {
                        required: true,
                        number: true
                    },
                    creditcard: {
                        required: true,
                        creditcard: true
                    },
                },

                invalidHandler: function (event, validator) { //display error alert on form submit              
                    success2.hide();
                    error2.show();
                    App.scrollTo(error2, -200);
                },

                errorPlacement: function (error, element) { // render error placement for each input type
                    var icon = $(element).parent('.input-icon').children('i');
                    icon.removeClass('fa-check').addClass("fa-warning");  
                    icon.attr("data-original-title", error.text()).tooltip({'container': 'body'});
                },

                highlight: function (element) { // hightlight error inputs
                    $(element)
                        .closest('.form-group').removeClass("has-success").addClass('has-error'); // set error class to the control group   
                },

                unhighlight: function (element) { // revert the change done by hightlight
                    
                },

                success: function (label, element) {
                    var icon = $(element).parent('.input-icon').children('i');
                    $(element).closest('.form-group').removeClass('has-error').addClass('has-success'); // set success class to the control group
                    icon.removeClass("fa-warning").addClass("fa-check");
                },

                submitHandler: function (form) {
                    success2.show();
                    error2.hide();
                    form[0].submit(); // submit the form
                }
            });


    }

    

    return {
        //main function to initiate the module
        init: function () {

            handleValidation1();
            handleValidation2();

        }

    };

}();

jQuery(document).ready(function() {
	'use strict';
    FormValidation.init();
});
/**
 *  Document   : app.js
 *  Author     : redstar
 *  Description: Core script to handle the entire theme and core functions
 *
 **/
var App = function() {

    // IE mode
    var isIE8 = false;
    var isIE9 = false;
    var isIE10 = false;

    var resizeHandlers = [];

    var assetsPath = '';

    var globalImgPath = 'img/';

    var globalPluginsPath = 'global/plugins/';

    var globalCssPath = 'css/';

    /************* Setting for IE ****************/
    var handleInit = function() {


        isIE8 = !!navigator.userAgent.match(/MSIE 8.0/);
        isIE9 = !!navigator.userAgent.match(/MSIE 9.0/);
        isIE10 = !!navigator.userAgent.match(/MSIE 10.0/);

        if (isIE10) {
            $('html').addClass('ie10'); // detect IE10 version
        }

        if (isIE10 || isIE9 || isIE8) {
            $('html').addClass('ie'); // detect IE10 version
        }
    };
    
    /*************** Change theme color *************/
    var handleColorSetting = function() {

    	$(".settingPanelToggle").on("click", function() {
    	    $(".settingSidebar").toggleClass("showSettingPanel");
    	  });
    	
    	 $(".page-content-wrapper").on("click", function() {
    	      $(".settingSidebar").removeClass("showSettingPanel");
    	    });

    };
    
    
    /*************** Change Language *************/
    var handleLanguage = function() {

    	$(document).on('click', '.language-switch .dropdown-menu li a', function () {
    		$(".language-switch>a").html($(this).html()+'<span class="fa fa-angle-down"></span>');
    		$(".language-switch>a img").addClass("position-left");
    	});

    };
    /*************** Hover Sidemenu *************/
    var handleHoverSidemenu = function() {
    	$(".sidemenu-hover-submenu").parent().parent().css("position","relative");
    };


    /************* Handle theme layout ****************/
    var handleTheme = function() {

        var panel = $('.chatpane');

        if ($('body').hasClass('page-boxed') === false) {
            $('.layout-option', panel).val("fluid");
        }

        $('.sidebar-option', panel).val("default");
        $('.page-header-option', panel).val("fixed");
        $('.page-footer-option', panel).val("default");
        if ($('.sidebar-pos-option').attr("disabled") === false) {
            $('.sidebar-pos-option', panel).val('left');
        }
        var lastSelectedLayout = '';

        var setLayout = function() {

            var layoutOption = $('.layout-option', panel).val();
            var sidebarOption = $('.sidebar-option', panel).val();
            var headerOption = $('.page-header-option', panel).val();
            var footerOption = $('.page-footer-option', panel).val();
            var sidebarPosOption = $('.sidebar-pos-option', panel).val();
            var sidebarStyleOption = $('.sidebar-style-option', panel).val();
            var sidebarMenuOption = $('.sidebar-menu-option', panel).val();
            var headerTopDropdownStyle = $('.page-header-top-dropdown-style-option', panel).val();

            if (sidebarOption == "fixed" && headerOption == "default") {
                alert('Default Header with Fixed Sidebar option is not supported. Proceed with Fixed Header with Fixed Sidebar.');
                $('.page-header-option', panel).val("fixed");
                $('.sidebar-option', panel).val("fixed");
                sidebarOption = 'fixed';
                headerOption = 'fixed';
            }

            resetLayout(); // reset layout to default state

            if (layoutOption === "boxed") {
                $("body").addClass("page-boxed");

                // set header
                $('.page-header > .page-header-inner').addClass("container");
                var cont = $('body > .clearfix').after('<div class="container"></div>');

                // set content
                $('.page-container').appendTo('body > .container');

                // set footer
                if (footerOption === 'fixed') {
                    $('.page-footer').html('<div class="container">' + $('.page-footer').html() + '</div>');
                } else {
                    $('.page-footer').appendTo('body > .container');
                }
            }

            if (lastSelectedLayout != layoutOption) {
                //layout changed, run responsive handler: 
                App.runResizeHandlers();
            }
            lastSelectedLayout = layoutOption;

            /************ header ******************/
            if (headerOption === 'fixed') {
                $("body").addClass("page-header-fixed");
                $(".page-header").removeClass("navbar-static-top").addClass("navbar-fixed-top");
            } else {
                $("body").removeClass("page-header-fixed");
                $(".page-header").removeClass("navbar-fixed-top").addClass("navbar-static-top");
            }

            /************ sidebar *****************/
            if ($('body').hasClass('page-full-width') === false) {
                if (sidebarOption === 'fixed') {
                    $("body").addClass("sidemenu-container-fixed");
                    $("sidemenu").addClass("sidemenu-fixed");
                    $("sidemenu").removeClass("page-sidebar-menu-default");
                    Layout.initFixedSidebarHoverEffect();
                } else {
                    $("body").removeClass("sidemenu-container-fixed");
                    $("page-sidebar-menu").addClass("page-sidebar-menu-default");
                    $("page-sidebar-menu").removeClass("sidemenu-default");
                    $('.sidemenu').unbind('mouseenter').unbind('mouseleave');
                }
            }

            /********* top dropdown style ************/
            if (headerTopDropdownStyle === 'dark') {
                $(".top-menu > .navbar-nav > li.dropdown").addClass("dropdown-dark");
            } else {
                $(".top-menu > .navbar-nav > li.dropdown").removeClass("dropdown-dark");
            }

            /************* footer ****************/ 
            if (footerOption === 'fixed') {
                $("body").addClass("page-footer-fixed");
            } else {
                $("body").removeClass("page-footer-fixed");
            }

            /*********** sidebar style ***************/
            if (sidebarStyleOption === 'light') {
                $(".page-sidebar-menu").addClass("page-sidebar-menu-light");
            } else {
                $(".page-sidebar-menu").removeClass("page-sidebar-menu-light");
            }

            /********* sidebar menu ***********************/ 
            if (sidebarMenuOption === 'hover') {
                if (sidebarOption == 'fixed') {
                    $('.sidebar-menu-option', panel).val("accordion");
                    alert("Hover Sidebar Menu is not compatible with Fixed Sidebar Mode. Select Default Sidebar Mode Instead.");
                } else {
                    $(".sidemenu").addClass("sidemenu-hover-submenu");
                }
            } else {
                $(".sidemenu").removeClass("sidemenu-hover-submenu");
            }

            /**************** sidebar left right position setting **************/
            if (sidebarPosOption === 'right') {
                $("body").addClass("sidemenu-container-reversed");
                $('#frontend-link').tooltip('destroy').tooltip({
                    placement: 'left'
                });
            } else {
                $("body").removeClass("sidemenu-container-reversed");
                $('#frontend-link').tooltip('destroy').tooltip({
                    placement: 'right'
                });
            }

            Layout.fixContentHeight(); // fix content height            
            Layout.initFixedSidebar(); // reinitialize fixed sidebar
        };

        $(document).on('click', '.toggler', panel, function() {
            $('.toggler').hide();
            $('.toggler-close').show();
            $('.chatpane > .theme-options').show();
        });

        $(document).on('click', '.toggler-close', panel, function() {
            $('.toggler').show();
            $('.toggler-close').hide();
            $('.chatpane > .theme-options').hide();
        });

        /*************** spinner  button ******************/
        $(document).on('click', '.spinner button', function() {
            var btn = $(this);
            var input = btn.closest('.spinner').find('input');
            var step = 1;
            if (input.attr('step') != undefined) {
                step = parseInt(input.attr('step'),10);
            }
            if (btn.attr('data-dir') == 'up') {
                if (input.attr('max') == undefined || parseInt(input.val(),10) < parseInt(input.attr('max'),10)) {
                    input.val(parseInt(input.val(), 10) + step);
                } else {
                    btn.next("disabled", true);
                }
            } else {
                if (input.attr('min') == undefined || parseInt(input.val(),10) > parseInt(input.attr('min'),10)) {
                    input.val(parseInt(input.val(), 10) - step);
                } else {
                    btn.prev("disabled", true);
                }
            }
        });

        /*************** TO DO **********************/
        $(document).on('click', '.todo-check label', function() {
            $(this).parents('li').children('.todo-title').toggleClass('line-through');
        });
        $(document).on('click', '.todo-remove', function() {
            $(this).closest("li").remove();
            return false;
        });

        $(document).on('click', '.panel .tools .fa-times', function() {
            $(this).parents(".panel").parent().remove();
        });
        $('.tooltips').tooltip();

        // clickable row for email
        $(document).on('click', '.clickable-row', function() {
            window.document.location = $(this).data("link");
        });


        /************* collapse button in panel***************8*/
        $(document).on('click', '.card .tools .t-collapse', function() {
            var el = $(this).parents(".card").children(".card-body");
            if ($(this).hasClass("fa-chevron-down")) {
                $(this).removeClass("fa-chevron-down").addClass("fa-chevron-up");
                el.slideUp(200);
            } else {
                $(this).removeClass("fa-chevron-up").addClass("fa-chevron-down");
                el.slideDown(200);
            }
        });

        /**************** close button in panel *****************/
        $(document).on('click', '.card .tools .t-close', function() {
            $(this).parents(".card").parent().remove();
        });

        /****************** refresh button in panel *****************/
        $('.box-refresh').on('click', function(br) {
            br.preventDefault();
            $("<div class='refresh-block'><span class='refresh-loader'><i class='fa fa-spinner fa-spin'></i></span></div>").appendTo($(this).parents('.tools').parents('.card-head').parents('.card'));
            setTimeout(function() {
                $('.refresh-block').remove();
            }, 1000);
        });

        /***************** set default theme options **************************/

        if ($("body").hasClass("page-boxed")) {
            $('.layout-option', panel).val("boxed");
        }

        if ($("body").hasClass("sidemenu-container-fixed")) {
            $('.sidebar-option', panel).val("fixed");
        }

        if ($("body").hasClass("page-header-fixed")) {
            $('.page-header-option', panel).val("fixed");
        }

        if ($("body").hasClass("page-footer-fixed")) {
            $('.page-footer-option', panel).val("fixed");
        }

        if ($("body").hasClass("sidemenu-container-reversed")) {
            $('.sidebar-pos-option', panel).val("right");
        }

        if ($(".page-sidebar-menu").hasClass("page-sidebar-menu-light")) {
            $('.sidebar-style-option', panel).val("light");
        }

        if ($(".page-sidebar-menu").hasClass("page-sidebar-menu-hover-submenu")) {
            $('.sidebar-menu-option', panel).val("hover");
        }

        var sidebarOption = $('.sidebar-option', panel).val();
        var headerOption = $('.page-header-option', panel).val();
        var footerOption = $('.page-footer-option', panel).val();
        var sidebarPosOption = $('.sidebar-pos-option', panel).val();
        var sidebarStyleOption = $('.sidebar-style-option', panel).val();
        var sidebarMenuOption = $('.sidebar-menu-option', panel).val();

        $('.layout-option, .page-header-option, .page-header-top-dropdown-style-option, .sidebar-option, .page-footer-option, .sidebar-pos-option, .sidebar-style-option, .sidebar-menu-option', panel).change(setLayout);
    };

    /************ Reset theme layout ********************/
    var resetLayout = function() {
        $("body").
        removeClass("page-boxed").
        removeClass("page-footer-fixed").
        removeClass("sidemenu-container-fixed").
        removeClass("page-header-fixed").
        removeClass("sidemenu-container-reversed");

        $('.page-header > .page-header-inner').removeClass("container");

        if ($('.page-container').parent(".container").length === 1) {
            $('.page-container').insertAfter('body > .clearfix');
        }

        if ($('.page-footer > .container').length === 1) {
            $('.page-footer').html($('.page-footer > .container').html());
        } else if ($('.page-footer').parent(".container").length === 1) {
            $('.page-footer').insertAfter('.page-container');
            $('.scroll-to-top').insertAfter('.page-footer');
        }

        $(".top-menu > .navbar-nav > li.dropdown").removeClass("dropdown-dark");

        $('body > .container').remove();
    };


    // runs callback functions set by App.addResponsiveHandler().
    var _runResizeHandlers = function() {
        // reinitialize other subscribed elements
        for (var i = 0; i < resizeHandlers.length; i++) {
            var each = resizeHandlers[i];
            each.call();
        }
    };

    /********** handle the layout reinitialization on window resize ***********/
    var handleOnResize = function() {
        var resize;
        if (isIE8) {
            var currheight;
            $(window).resize(function() {
                if (currheight == document.documentElement.clientHeight) {
                    return; //quite event since only body resized not window.
                }
                if (resize) {
                    clearTimeout(resize);
                }
                resize = setTimeout(function() {
                    _runResizeHandlers();
                }, 50); // wait 50ms until window resize finishes.                
                currheight = document.documentElement.clientHeight; // store last body client height
            });
        } else {
            $(window).resize(function() {
                if (resize) {
                    clearTimeout(resize);
                }
                resize = setTimeout(function() {
                    _runResizeHandlers();
                }, 50); // wait 50ms until window resize finishes.
            });
        }
    };

    /*************** Handles Bootstrap switches in setting panel  ********/
    var handleBootstrapSwitch = function() {
        if (!$().bootstrapSwitch) {
            return;
        }
        $('.make-switch').bootstrapSwitch();
    };

    /*************** Handles Bootstrap Tabs **********************/
    var handleTabs = function() {
        //activate tab if tab id provided in the URL
        if (encodeURI(location.hash)) {
            var tabid = encodeURI(location.hash.substr(1));
            $('a[href="#' + tabid + '"]').parents('.tab-pane:hidden').each(function() {
                var tabid = $(this).attr("id");
                $('a[href="#' + tabid + '"]').click();
            });
            $('a[href="#' + tabid + '"]').click();
        }

        if ($().tabdrop) {
            $('.tabbable-tabdrop .nav-pills, .tabbable-tabdrop .nav-tabs').tabdrop({
                text: '<i class="fa fa-ellipsis-v"></i>&nbsp;<i class="fa fa-angle-down"></i>'
            });
        }
    };

    /************* Handles Bootstrap Dropdowns  ********************/
    var handleDropdowns = function() {
        /*
          Hold dropdown on click  
        */
        $('body').on('click', '.dropdown-menu.hold-on-click', function(e) {
            e.stopPropagation();
        });
    };

    /************** Handles counterup plugin wrapper ****************/
    var handleCounterup = function() {
        if (!$().counterUp) {
            return;
        }

        $("[data-counter='counterup']").counterUp({
            delay: 10,
            time: 1000
        });
    };

    // Fix input placeholder issue for IE8 and IE9
    var handleFixInputPlaceholderForIE = function() {
        //fix html5 placeholder attribute for ie7 & ie8
        if (isIE8 || isIE9) { // ie8 & ie9
            // this is html5 placeholder fix for inputs, inputs with placeholder-no-fix class will be skipped(e.g: we need this for password fields)
            $('input[placeholder]:not(.placeholder-no-fix), textarea[placeholder]:not(.placeholder-no-fix)').each(function() {
                var input = $(this);

                if (input.val() === '' && input.attr("placeholder") !== '') {
                    input.addClass("placeholder").val(input.attr('placeholder'));
                }

                input.focus(function() {
                    if (input.val() == input.attr('placeholder')) {
                        input.val('');
                    }
                });

                input.blur(function() {
                    if (input.val() === '' || input.val() == input.attr('placeholder')) {
                        input.val(input.attr('placeholder'));
                    }
                });
            });
        }
    };

    // Handle Select2 Dropdowns
    var handleSelect2 = function() {
        if ($().select2) {
            $.fn.select2.defaults.set("theme", "bootstrap");
            $('.select2me').select2({
                placeholder: "Select",
                width: 'auto',
                allowClear: true
            });
        }
    };

    // handle group element heights
    var handleHeight = function() {
        $('[data-auto-height]').each(function() {
            var parent = $(this);
            var items = $('[data-height]', parent);
            var height = 0;
            var mode = parent.attr('data-mode');
			var data_offset = parent.attr('data-offset') ? parent.attr('data-offset') : 0;
            var offset = parseInt(data_offset,10);

            items.each(function() {
                if ($(this).attr('data-height') == "height") {
                    $(this).css('height', '');
                } else {
                    $(this).css('min-height', '');
                }

                var height_ = (mode == 'base-height' ? $(this).outerHeight() : $(this).outerHeight(true));
                if (height_ > height) {
                    height = height_;
                }
            });

            height = height + offset;

            items.each(function() {
                if ($(this).attr('data-height') == "height") {
                    $(this).css('height', height);
                } else {
                    $(this).css('min-height', height);
                }
            });

            if (parent.attr('data-related')) {
                $(parent.attr('data-related')).css('height', parent.height());
            }
        });
    }

    // Handles quick sidebar toggler
    var handleQuickSidebarToggler = function() {
        // close sidebar using button click
        $(document).on('click', '.dropdown-quick-sidebar-toggler a', function(e) {
            $('body').toggleClass('chat-sidebar-open');
        });
        // close sidebar when click outside box
        $(document).on('click', '.page-content', function(e) {
        	if($("body").hasClass("chat-sidebar-open")){
        			$('body').toggleClass('chat-sidebar-open');
        	}
        });
        // close sidebar using esc key
        $( document ).on( 'keydown', function ( e ) {
            if ( e.keyCode === 27 && $("body").hasClass("chat-sidebar-open")) { // ESC
            	$('body').toggleClass('chat-sidebar-open');
            }
        });
    };

   

    /********Sidebar slim-menu*********/
    var handleslimscroll_menu = function() {
    	$(".slimscroll-style").slimscroll({
            height: $( window ).height() - 90,
            position: "right",
            size: "5px",
            color: "#9ea5ab",
            wheelStep : 10,
            touchScrollStep : 50
        });
    	$(".small-slimscroll-style").slimscroll({
            height: "260px",
            position: "right",
            size: "5px",
            color: "#9ea5ab",
            wheelStep : 10,
            touchScrollStep : 50
        });
    };
    
    handleChatScrollbar = function() {
        var t = $(".chat-sidebar-chat"),
            i = function() {
                var i, a = t.find(".chat-sidebar-item"),
                    e = $(".chat-sidebar-chat-users").attr("data-height");
                i = $(".chat-sidebar-chat-users").attr("data-height") - 80 - t.find(".nav-justified > .nav-tabs").outerHeight(), a.attr("data-height", i), a.css("height", e + "px"), a.css("overflow-y", "auto")
            };
        i(), App.addResizeHandler(i)
    };

    // Handles quick sidebar settings
    var handleQuickSidebarSettings = function() {
        var wrapper = $('.chat-sidebar-container');

        var initSettingsSlimScroll = function() {
            var settingsList = wrapper.find('.chat-sidebar-settings-list');
            var settingsListHeight;

            settingsListHeight = wrapper.height() - 80 - wrapper.find('.nav-justified > .nav-tabs').outerHeight();

            // alerts list 
            settingsList.attr("data-height", settingsListHeight);
            settingsList.css("height", wrapper.height() + "px");
            settingsList.css("overflow-y", "auto");
        };

        initSettingsSlimScroll();
        App.addResizeHandler(initSettingsSlimScroll); // reinitialize on window resize
    };



    //* END:CORE HANDLERS *//

    return {

        //main function to initiate the theme
        init: function() {

            //Core handlers
            handleInit(); // initialize core variables
            handleTheme();
            handleOnResize(); // set and handle responsive    
            handleColorSetting();
            handleLanguage();
            handleHoverSidemenu();
            
            //UI Component handlers     
            handleBootstrapSwitch(); // handle bootstrap switch plugin
            handleSelect2(); // handle custom Select2 dropdowns
            handleDropdowns(); // handle dropdowns
            handleTabs(); // handle tabs
            handleCounterup(); // handle counterup instances

            handleQuickSidebarToggler(); // handles quick sidebar's toggler
            handleQuickSidebarSettings(); // handles quick sidebar's setting
            handleChatScrollbar();

            handleslimscroll_menu();
            
            //Handle group element heights
            this.addResizeHandler(handleHeight); // handle auto calculating height on window resize

            handleFixInputPlaceholderForIE(); //IE8 & IE9 input placeholder issue fix
        },

        //public function to add callback a function which will be called on window resize
        addResizeHandler: function(func) {
            resizeHandlers.push(func);
        },

        //public functon to call _runresizeHandlers
        runResizeHandlers: function() {
            _runResizeHandlers();
        },

        // wrApper function to scroll(focus) to an element
        scrollTo: function(el, offeset) {
            var pos = (el && el.length > 0) ? el.offset().top : 0;

            if (el) {
                if ($('body').hasClass('page-header-fixed')) {
                    pos = pos - $('.page-header').height();
                } else if ($('body').hasClass('page-header-top-fixed')) {
                    pos = pos - $('.page-header-top').height();
                } else if ($('body').hasClass('page-header-menu-fixed')) {
                    pos = pos - $('.page-header-menu').height();
                }
                pos = pos + (offeset ? offeset : -1 * el.height());
            }

            $('html,body').animate({
                scrollTop: pos
            }, 'slow');
        },
        // function to scroll to the top
        scrollTop: function() {
            App.scrollTo();
        },

        startPageLoading: function(options) {
            if (options && options.animate) {
                $('.page-spinner-bar').remove();
                $('body').append('<div class="page-spinner-bar"><div class="bounce1"></div><div class="bounce2"></div><div class="bounce3"></div></div>');
            } else {
                $('.page-loading').remove();
                $('body').append('<div class="page-loading"><img src="' + this.getGlobalImgPath() + 'loading-spinner-grey.gif"/>&nbsp;&nbsp;<span>' + (options && options.message ? options.message : 'Loading...') + '</span></div>');
            }
        },

        stopPageLoading: function() {
            $('.page-loading, .page-spinner-bar').remove();
        },

        //public helper function to get actual input value(used in IE9 and IE8 due to placeholder attribute not supported)
        getActualVal: function(el) {
            el = $(el);
            if (el.val() === el.attr("placeholder")) {
                return "";
            }
            return el.val();
        },

        //public function to get a paremeter by name from URL
        getURLParameter: function(paramName) {
            var searchString = window.location.search.substring(1),
                i, val, params = searchString.split("&");

            for (i = 0; i < params.length; i++) {
                val = params[i].split("=");
                if (val[0] == paramName) {
                    return unescape(val[1]);
                }
            }
            return null;
        },

        getViewPort: function() {
            var e = window,
                a = 'inner';
            if (!('innerWidth' in window)) {
                a = 'client';
                e = document.documentElement || document.body;
            }

            return {
                width: e[a + 'Width'],
                height: e[a + 'Height']
            };
        },

        getUniqueID: function(prefix) {
            return 'prefix_' + Math.floor(Math.random() * (new Date()).getTime());
        },

        // check IE8 mode
        isIE8: function() {
            return isIE8;
        },

        // check IE9 mode
        isIE9: function() {
            return isIE9;
        },

        getAssetsPath: function() {
            return assetsPath;
        },

        setAssetsPath: function(path) {
            assetsPath = path;
        },

        setGlobalImgPath: function(path) {
            globalImgPath = path;
        },

        getGlobalImgPath: function() {
            return assetsPath + globalImgPath;
        },

        getGlobalCssPath: function() {
            return assetsPath + globalCssPath;
        },

        getResponsiveBreakpoint: function(size) {
            // bootstrap responsive breakpoints
            var sizes = {
                'xs': 480, // extra small
                'sm': 768, // small
                'md': 992, // medium
                'lg': 1200 // large
            };

            return sizes[size] ? sizes[size] : 0;
        }
    };

}();

jQuery(document).ready(function() {
    App.init(); // init core componets
    $(".chat-sidebar-chat-user-messages").animate({
        scrollTop: $(document).height()
    }, 1000);
});
window._ = require('lodash');

/**
 * We'll load jQuery and the Bootstrap jQuery plugin which provides support
 * for JavaScript based Bootstrap features such as modals and tabs. This
 * code may be modified to fit the specific needs of your application.
 */

try {
    window.Popper = require('popper.js').default;
    window.$ = window.jQuery = require('jquery');

    require('bootstrap');
} catch (e) {}

/**
 * We'll load the axios HTTP library which allows us to easily issue requests
 * to our Laravel back-end. This library automatically handles sending the
 * CSRF token as a header based on the value of the "XSRF" token cookie.
 */

window.axios = require('axios');

window.axios.defaults.headers.common['X-Requested-With'] = 'XMLHttpRequest';

/**
 * Echo exposes an expressive API for subscribing to channels and listening
 * for events that are broadcast by Laravel. Echo and event broadcasting
 * allows your team to easily build robust real-time web applications.
 */

// import Echo from 'laravel-echo';

// window.Pusher = require('pusher-js');

// window.Echo = new Echo({
//     broadcaster: 'pusher',
//     key: process.env.MIX_PUSHER_APP_KEY,
//     cluster: process.env.MIX_PUSHER_APP_CLUSTER,
//     encrypted: true
// });

/**
 *  Document   : layout.js
 *  Author     : redstar
 *  Description: Core script to handle the entire theme and core functions
 *
 **/
var Layout = function () {

    var layoutImgPath = 'img/';

    var layoutCssPath = 'css/';

    var resBreakpointMd = App.getResponsiveBreakpoint('md');

    var ajaxContentSuccessCallbacks = [];
    var ajaxContentErrorCallbacks = [];

    // this function handles responsive layout on screen size resize or mobile device rotate.
    // Set proper height for sidebar and content. The content and sidebar height must be synced always.
    var handleSidebarAndContentHeight = function () {
        var content = $('.page-content');
        var sidebar = $('.sidemenu-container');
        var body = $('body');
        var height;
        
        if (body.hasClass("page-footer-fixed") === true && body.hasClass("sidemenu-container-fixed") === false) {
            var available_height = App.getViewPort().height - $('.page-footer').outerHeight() - $('.page-header').outerHeight();
            var sidebar_height = sidebar.outerHeight();
            if (sidebar_height > available_height) {
                available_height = sidebar_height + $('.page-footer').outerHeight();
            }
            if (content.height() < available_height) {
                content.attr('style', 'min-height:' + available_height + 'px');
            }
        } else {
            if (body.hasClass('sidemenu-container-fixed')) {
                height = _calculateFixedSidebarViewportHeight();
                if (body.hasClass('page-footer-fixed') === false) {
                    height = height - $('.page-footer').outerHeight();
                }
            } else {
                var headerHeight = $('.page-header').outerHeight();
                var footerHeight = $('.page-footer').outerHeight();

                if (App.getViewPort().width < resBreakpointMd) {
                    height = App.getViewPort().height - headerHeight - footerHeight;
                } else {
                    height = sidebar.height() + 20;
                }

                if ((height + headerHeight + footerHeight) <= App.getViewPort().height) {
                    height = App.getViewPort().height - headerHeight - footerHeight;
                }
            }
            height = height - 32;
            content.attr('style', 'min-height:' + height + 'px');
        }
    };

    // Handle sidebar menu links
    var handleSidebarMenuActiveLink = function(mode, el) {
        var url = location.hash.toLowerCase();    

        var menu = $('.sidemenu');

        if (mode === 'click' || mode === 'set') {
            el = $(el);
        } else if (mode === 'match') {
            menu.find("li > a").each(function() {
                var path = $(this).attr("href").toLowerCase();       
                // url match condition         
                if (path.length > 1 && url.substr(1, path.length - 1) == path.substr(1)) {
                    el = $(this);
                    return; 
                }
            });
        }

        if (!el || el.length == 0) {
            return;
        }

        if (el.attr('href').toLowerCase() === 'javascript:;' || el.attr('href').toLowerCase() === '#') {
            return;
        }        

        var slideSpeed = parseInt(menu.data("slide-speed"),10);
        var keepExpand = menu.data("keep-expanded");

        // begin: handle active state
        if (menu.hasClass('sidemenu-hover-submenu') === false) {
            menu.find('li.nav-item.open').each(function() {
                var match = false;
                $(this).find('li').each(function(){
                    if ($(this).find(' > a').attr('href') === el.attr('href')) {
                        match = true;
                        return;
                    }
                });

                if (match === true) {
                    return;
                }

                $(this).removeClass('open');
                $(this).find('> a > .arrow.open').removeClass('open');
                $(this).find('> .sub-menu').slideUp();
            });  
        } else {
             menu.find('li.open').removeClass('open');
        }

        menu.find('li.active').removeClass('active');
        menu.find('li > a > .selected').remove();
        // end: handle active state

        el.parents('li').each(function () {
            $(this).addClass('active');
            $(this).find('> a > span.arrow').addClass('open');

            if ($(this).parent('ul.sidemenu').length === 1) {
                $(this).find('> a').append('<span class="selected"></span>');
            }
            
            if ($(this).children('ul.sub-menu').length === 1) {
                $(this).addClass('open');
            }
        });

        if (mode === 'click') {
            if (App.getViewPort().width < resBreakpointMd && $('.sidemenu-container').hasClass("in")) { // close the menu on mobile view while laoding a page 
                $('.page-header .responsive-toggler').click();
            }
        }
    };

    // Handle sidebar menu
    var handleSidebarMenu = function () {
        // offcanvas mobile menu 
        
        // handle sidebar link click
        $('.sidemenu').on('click', 'li > a.nav-toggle, li > a > span.nav-toggle', function (e) {
            var that = $(this).closest('.nav-item').children('.nav-link');

            if (App.getViewPort().width >= resBreakpointMd && !$('.sidemenu').attr("data-initialized") && $('body').hasClass('sidemenu-closed') &&  that.parent('li').parent('.sidemenu').length === 1) {
                return;
            }

            var hasSubMenu = that.next().hasClass('sub-menu');

            if (App.getViewPort().width >= resBreakpointMd && that.parents('.sidemenu-hover-submenu').length === 1) { // exit of hover sidebar menu
                return;
            }

            if (hasSubMenu === false) {
                if (App.getViewPort().width < resBreakpointMd && $('.sidemenu-container').hasClass("in")) { // close the menu on mobile view while laoding a page 
                    $('.page-header .responsive-toggler').click();
                }
                return;
            }

            var parent =that.parent().parent();
            var the = that;
            var menu = $('.sidemenu');
            var sub = that.next();

            var autoScroll = menu.data("auto-scroll");
            var slideSpeed = parseInt(menu.data("slide-speed"),10);
            var keepExpand = menu.data("keep-expanded");
            
            if (!keepExpand) {
                parent.children('li.open').children('a').children('.arrow').removeClass('open');
                parent.children('li.open').children('.sub-menu:not(.always-open)').slideUp(slideSpeed);
                parent.children('li.open').removeClass('open');
            }

            var slideOffeset = -200;

            if (sub.is(":visible")) {
                $('.arrow', the).removeClass("open");
                the.parent().removeClass("open");
                sub.slideUp(slideSpeed, function () {
                   handleSidebarAndContentHeight();
                });
            } else if (hasSubMenu) {
                $('.arrow', the).addClass("open");
                the.parent().addClass("open");
                sub.slideDown(slideSpeed, function () {
                    handleSidebarAndContentHeight();
                });
            }

            e.preventDefault();
        });


        // handle scrolling to top on responsive menu toggler click when header is fixed for mobile view
        $(document).on('click', '.page-header-fixed-mobile .page-header .responsive-toggler', function(){
            App.scrollTop(); 
        });      
     
        // handle sidebar hover effect        
        handleFixedSidebarHoverEffect();

        // handle the search bar close
        $('.sidemenu-container').on('click', '.sidebar-search .remove', function (e) {
            e.preventDefault();
            $('.sidebar-search').removeClass("open");
        });

        // handle the search query submit on enter press
        $('.sidemenu-container .sidebar-search').on('keypress', 'input.form-control', function (e) {
            if (e.which == 13) {
                $('.sidebar-search').submit();
                return false; //<---- Add this line
            }
        });

        // handle the search submit(for sidebar search and responsive mode of the header search)
        $('.sidebar-search .submit').on('click', function (e) {
            e.preventDefault();
            if ($('body').hasClass("sidemenu-closed")) {
                if ($('.sidebar-search').hasClass('open') === false) {
                    if ($('.sidemenu-container-fixed').length === 1) {
                        $('.sidemenu-container .sidebar-toggler').click(); //trigger sidebar toggle button
                    }
                    $('.sidebar-search').addClass("open");
                } else {
                    $('.sidebar-search').submit();
                }
            } else {
                $('.sidebar-search').submit();
            }
        });

        // handle close on body click
        if ($('.sidebar-search').length !== 0) {
            $('.sidebar-search .input-group').on('click', function(e){
                e.stopPropagation();
            });

            $('body').on('click', function() {
                if ($('.sidebar-search').hasClass('open')) {
                    $('.sidebar-search').removeClass("open");
                }
            });
        }
    };

    // Helper function to calculate sidebar height for fixed sidebar layout.
    var _calculateFixedSidebarViewportHeight = function () {
        var sidebarHeight = App.getViewPort().height - $('.page-header').outerHeight(true);
        if ($('body').hasClass("page-footer-fixed")) {
            sidebarHeight = sidebarHeight - $('.page-footer').outerHeight();
        }

        return sidebarHeight;
    };

    // Handles fixed sidebar
    var handleFixedSidebar = function () {
        var menu = $('.sidemenu');

        handleSidebarAndContentHeight();

        if ($('.sidemenu-container-fixed').length === 0) {
            return;
        }

        if (App.getViewPort().width >= resBreakpointMd && !$('body').hasClass('sidemenu-not-fixed')) {
             menu.attr("data-height", _calculateFixedSidebarViewportHeight());
            App.destroySlimScroll(menu);
            App.initSlimScroll(menu);
            handleSidebarAndContentHeight();
        }
    };

    // Handles sidebar toggler to close/hide the sidebar.
    var handleFixedSidebarHoverEffect = function () {
        var body = $('body');
        if (body.hasClass('sidemenu-container-fixed')) {
            $('.sidemenu-container').on('mouseenter', function () {
                if (body.hasClass('sidemenu-closed')) {
                    $(this).find('.sidemenu').removeClass('sidemenu-closed');
                }
            }).on('mouseleave', function () {
                if (body.hasClass('sidemenu-closed')) {
                    $(this).find('.sidemenu').addClass('sidemenu-closed');
                }
            });
        }
    };

    // Hanles sidebar toggler
    var handleSidebarToggler = function () {
        var body = $('body');
        if ($.cookie && $.cookie('sidebar_closed') === '1' && App.getViewPort().width >= resBreakpointMd) {
            $('body').addClass('sidemenu-closed');
            $('.sidemenu').addClass('sidemenu-closed');
        }

        // handle sidebar show/hide
        $('body').on('click', '.sidebar-toggler', function (e) {
            var sidebar = $('.sidemenu-container');
            var sidebarMenu = $('.sidemenu');
            $(".sidebar-search", sidebar).removeClass("open");

            if (body.hasClass("sidemenu-closed")) {
                body.removeClass("sidemenu-closed");
                sidebarMenu.removeClass("sidemenu-closed");
                if ($.cookie) {
                    $.cookie('sidebar_closed', '0');
                }
            } else {
                body.addClass("sidemenu-closed");
                sidebarMenu.addClass("sidemenu-closed");
                if (body.hasClass("sidemenu-container-fixed")) {
                    sidebarMenu.trigger("mouseleave");
                }
                if ($.cookie) {
                    $.cookie('sidebar_closed', '1');
                }
            }

            $(window).trigger('resize');
        });
    };

    // Handles the horizontal menu
    var handleHorizontalMenu = function () {
        //handle tab click
        $('.page-header').on('click', '.hor-menu a[data-toggle="tab"]', function (e) {
            e.preventDefault();
            var nav = $(".hor-menu .nav");
            var active_link = nav.find('li.current');
            $('li.active', active_link).removeClass("active");
            $('.selected', active_link).remove();
            var new_link = $(this).parents('li').last();
            new_link.addClass("current");
            new_link.find("a:first").append('<span class="selected"></span>');
        });

        // handle search box expand/collapse        
        $('.page-header').on('click', '.search-form', function (e) {
            $(this).addClass("open");
            $(this).find('.form-control').focus();

            $('.page-header .search-form .form-control').on('blur', function (e) {
                $(this).closest('.search-form').removeClass("open");
                $(this).unbind("blur");
            });
        });

        // handle hor menu search form on enter press
        $('.page-header').on('keypress', '.hor-menu .search-form .form-control', function (e) {
            if (e.which == 13) {
                $(this).closest('.search-form').submit();
                return false;
            }
        });

        // handle header search button click
        $('.page-header').on('mousedown', '.search-form.open .submit', function (e) {
            e.preventDefault();
            e.stopPropagation();
            $(this).closest('.search-form').submit();
        });

        
        $(document).on('click', '.mega-menu-dropdown .dropdown-menu', function (e) {
            e.stopPropagation();
        });
    };
    
    var handleFullScreen = function () {
    	
    	function cancelFullScreen(el) {
            var requestMethod = el.cancelFullScreen||el.webkitCancelFullScreen||el.mozCancelFullScreen||el.exitFullscreen;
            if (requestMethod) { // cancel full screen.
                requestMethod.call(el);
            } else if (typeof window.ActiveXObject !== "undefined") { // Older IE.
                var wscript = new ActiveXObject("WScript.Shell");
                if (wscript !== null) {
                    wscript.SendKeys("{F11}");
                }
            }
        }

        function requestFullScreen(el) {
            // Supports most browsers and their versions.
            var requestMethod = el.requestFullScreen || el.webkitRequestFullScreen || el.mozRequestFullScreen || el.msRequestFullscreen;

            if (requestMethod) { // Native full screen.
                requestMethod.call(el);
            } else if (typeof window.ActiveXObject !== "undefined") { // Older IE.
                var wscript = new ActiveXObject("WScript.Shell");
                if (wscript !== null) {
                    wscript.SendKeys("{F11}");
                }
            }
            return false
        }
        $(document).on('click','.fullscreen-btn',function(e) {
        	var elem = document.documentElement; // Make the body go full screen.
            var isInFullScreen = (document.fullScreenElement && document.fullScreenElement !== null) ||  (document.mozFullScreen || document.webkitIsFullScreen);

            if (isInFullScreen) {
                cancelFullScreen(document);
            } else {
                requestFullScreen(elem);
            }
            return false;
        });
    	
    }

    // Handles Bootstrap Tabs.
    var handleTabs = function () {
        // fix content height on tab click
        $('body').on('shown.bs.tab', 'a[data-toggle="tab"]', function () {
            handleSidebarAndContentHeight();
        });
    };

    // Handles the go to top button at the footer
    var handleGoTop = function () {
        var offset = 300;
        var duration = 500;

        if (navigator.userAgent.match(/iPhone|iPad|iPod/i)) {  // ios supported
            $(window).bind("touchend touchcancel touchleave", function(e){
               if ($(this).scrollTop() > offset) {
                    $('.scroll-to-top').fadeIn(duration);
                } else {
                    $('.scroll-to-top').fadeOut(duration);
                }
            });
        } else {  // general 
            $(window).scroll(function() {
                if ($(this).scrollTop() > offset) {
                    $('.scroll-to-top').fadeIn(duration);
                } else {
                    $('.scroll-to-top').fadeOut(duration);
                }
            });
        }
        
		$(document).on('click','.scroll-to-top',function(e) {
            e.preventDefault();
            $('html, body').animate({scrollTop: 0}, duration);
            return false;
        });
    };

    // Hanlde 100% height elements(block, portlet, etc)
    var handle100HeightContent = function () {

        $('.full-height-content').each(function(){
            var target = $(this);
            var height;

            height = App.getViewPort().height -
                $('.page-header').outerHeight(true) -
                $('.page-footer').outerHeight(true) -
                $('.page-title').outerHeight(true) -
                $('.page-bar').outerHeight(true);

            if (target.hasClass('portlet')) {
                var portletBody = target.find('.portlet-body');

                App.destroySlimScroll(portletBody.find('.full-height-content-body')); // destroy slimscroll 
                
                height = height -
                    target.find('.portlet-title').outerHeight(true) -
                    parseInt(target.find('.portlet-body').css('padding-top'),10) -
                    parseInt(target.find('.portlet-body').css('padding-bottom'),10) - 5;

                if (App.getViewPort().width >= resBreakpointMd && target.hasClass("full-height-content-scrollable")) {
                    height = height - 35;
                    portletBody.find('.full-height-content-body').css('height', height);
                    App.initSlimScroll(portletBody.find('.full-height-content-body'));
                } else {
                    portletBody.css('min-height', height);
                }
            } else {
               App.destroySlimScroll(target.find('.full-height-content-body')); // destroy slimscroll 

                if (App.getViewPort().width >= resBreakpointMd && target.hasClass("full-height-content-scrollable")) {
                    height = height - 35;
                    target.find('.full-height-content-body').css('height', height);
                    App.initSlimScroll(target.find('.full-height-content-body'));
                } else {
                    target.css('min-height', height);
                }
            }
        });        
    };

    return {
        // Main init methods to initialize the layout
        initHeader: function() {
            handleHorizontalMenu(); // handles horizontal menu
            handleFullScreen(); // handle full screen
        },

        setSidebarMenuActiveLink: function(mode, el) {
            handleSidebarMenuActiveLink(mode, el);
        },

        initSidebar: function() {
            //layout handlers
            handleFixedSidebar(); // handles fixed sidebar menu
            handleSidebarMenu(); // handles main menu
            handleSidebarToggler(); // handles sidebar hide/show


            App.addResizeHandler(handleFixedSidebar); // reinitialize fixed sidebar on window resize
        },

        initContent: function() {
            handle100HeightContent(); // handles 100% height elements(block, portlet, etc)
            handleTabs(); // handle bootstrah tabs

            App.addResizeHandler(handleSidebarAndContentHeight); // recalculate sidebar & content height on window resize
            App.addResizeHandler(handle100HeightContent); // reinitialize content height on window resize 
        },

        initFooter: function() {
            handleGoTop(); //handles scroll to top functionality in the footer
        },

        init: function () {            
            this.initHeader();
            this.initSidebar();
            this.initContent();
            this.initFooter();
        },

        loadAjaxContent: function(url, sidebarMenuLink) {
            var pageContent = $('.page-content .page-content-body');    

            App.startPageLoading({animate: true});
            
            $.ajax({
                type: "GET",
                cache: false,
                url: url,
                dataType: "html",
                success: function (res) {    
                    App.stopPageLoading();
                                    
                    for (var i = 0; i < ajaxContentSuccessCallbacks.length; i++) {
                        ajaxContentSuccessCallbacks[i].call(res);
                    }

                    if (sidebarMenuLink.length > 0 && sidebarMenuLink.parents('li.open').length === 0) {
                        $('.sidemenu > li.open > a').click();
                    }

                    pageContent.html(res);
                    Layout.fixContentHeight(); // fix content height
                    App.initAjax(); // initialize core stuff
                },
                error: function (res, ajaxOptions, thrownError) {
                    App.stopPageLoading();
                    pageContent.html('<h4>Could not load the requested content.</h4>');

                    for (var i = 0; i < ajaxContentErrorCallbacks.length; i++) {
                        ajaxContentSuccessCallbacks[i].call(res);
                    }                    
                }
            });
        },

        addAjaxContentSuccessCallback: function(callback) {
            ajaxContentSuccessCallbacks.push(callback);
        },

        addAjaxContentErrorCallback: function(callback) {
            ajaxContentErrorCallbacks.push(callback);
        },

        //public function to fix the sidebar and content height accordingly
        fixContentHeight: function () {
            handleSidebarAndContentHeight();
        },

        initFixedSidebarHoverEffect: function() {
            handleFixedSidebarHoverEffect();
        },

        initFixedSidebar: function() {
            handleFixedSidebar();
        },

        getLayoutImgPath: function () {
            return App.getAssetsPath() + layoutImgPath;
        },

        getLayoutCssPath: function () {
            return App.getAssetsPath() + layoutCssPath;
        }
    };

}();

    jQuery(document).ready(function() {    
    	 Layout.init(); // init core componets
    	 
    	//Scroll active menu item when page load
    	 /*var $el = $('.sidemenu');
    	 var activeItemOffsetTop = $('.sidemenu-container .sidemenu li.active')[0].offsetTop
    	 if (activeItemOffsetTop > 150) $el.slimscroll({ scrollTo: activeItemOffsetTop + 'px' });*/
    	 
    });

/**
 *  Document   : theme-color.js
 *  Author     : redstar
 *  Description: Core script to handle the entire theme and core functions
 *
 **/

jQuery(document).ready(function() {
   jQuery(document).on("click",".sidebar-theme a",function() {
	   var sidebar_color = jQuery(this).attr('data-theme')+"-sidebar-color";
	   jQuery( "body" ).removeClass( "white-sidebar-color dark-sidebar-color blue-sidebar-color indigo-sidebar-color green-sidebar-color red-sidebar-color cyan-sidebar-color" );
	   jQuery( "body" ).addClass( sidebar_color );
   });
   jQuery(document).on("click",".logo-theme a",function() {
	   var logo_color = jQuery(this).attr('data-theme');
	   jQuery( "body" ).removeClass( "logo-white logo-dark logo-blue logo-indigo logo-red logo-cyan logo-green" );
	   jQuery( "body" ).addClass( logo_color );
   });
   jQuery(document).on("click",".header-theme a",function() {
	   var header_color = jQuery(this).attr('data-theme');
	   jQuery( "body" ).removeClass( "header-white header-dark header-blue header-indigo header-red header-cyan header-green" );
	   jQuery( "body" ).addClass( header_color );
   });
});

