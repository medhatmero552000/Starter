$(function() {
  'use strict';

  var colors = {
    primary        : "#6571ff",
    secondary      : "#7987a1",
    success        : "#05a34a",
    info           : "#66d1d1",
    warning        : "#fbbc06",
    danger         : "#ff3366",
    light          : "#e9ecef",
    dark           : "#060c17",
    muted          : "#7987a1",
    gridBorder     : "rgba(77, 138, 240, .15)",
    bodyColor      : "#b8c3d9",
    cardBg         : "#0c1427"
  };

  var fontFamily = "'Roboto', Helvetica, sans-serif";

  // Date Picker
  if($('#dashboardDate').length) {
    flatpickr("#dashboardDate", {
      wrap: true,
      dateFormat: "d-M-Y",
      defaultDate: "today",
    });
  }

  // Customers Chart
  if($('#customersChart').length) {
    var options1 = {
      chart: { type: "line", height: 60, sparkline: { enabled: true } },
      series: [{ data: [3844, 3855, 3841, 3867, 3822, 3843, 3821, 3841, 3856, 3827, 3843] }],
      xaxis: { type: 'datetime', categories: ["Jan 01 2022", "Jan 02 2022", "Jan 03 2022", "Jan 04 2022", "Jan 05 2022", "Jan 06 2022", "Jan 07 2022", "Jan 08 2022", "Jan 09 2022", "Jan 10 2022", "Jan 11 2022"] },
      stroke: { width: 2, curve: "smooth" },
      markers: { size: 0 },
      colors: [colors.primary]
    };
    new ApexCharts(document.querySelector("#customersChart"), options1).render();
  }

  // Orders Chart 1
  if($('#ordersChart').length) {
    var options2 = {
      chart: { type: "bar", height: 60, sparkline: { enabled: true } },
      plotOptions: { bar: { borderRadius: 2, columnWidth: "60%" } },
      colors: [colors.primary],
      series: [{ data: [36, 77, 52, 90, 74, 35, 55, 23, 47, 10, 63] }],
      xaxis: { type: 'datetime', categories: ["Jan 01 2022", "Jan 02 2022", "Jan 03 2022", "Jan 04 2022", "Jan 05 2022", "Jan 06 2022", "Jan 07 2022", "Jan 08 2022", "Jan 09 2022", "Jan 10 2022", "Jan 11 2022"] }
    };
    new ApexCharts(document.querySelector("#ordersChart"), options2).render();
  }

  // Orders Chart 2 (تم تصحيح الخطأ هنا)
  if($('#ordersChart2').length) {
    var options3 = {
      chart: { type: "bar", height: 60, sparkline: { enabled: true } },
      plotOptions: { bar: { borderRadius: 2, columnWidth: "60%" } },
      colors: [colors.primary],
      series: [{ data: [36, 77, 52, 90, 74, 35, 55, 23, 47, 10, 63] }],
      xaxis: { type: 'datetime', categories: ["Jan 01 2022", "Jan 02 2022", "Jan 03 2022", "Jan 04 2022", "Jan 05 2022", "Jan 06 2022", "Jan 07 2022", "Jan 08 2022", "Jan 09 2022", "Jan 10 2022", "Jan 11 2022"] }
    };
    new ApexCharts(document.querySelector("#ordersChart2"), options3).render();
  }

  // يمكن إضافة باقي الشارتات (growthChart, revenueChart, monthlySalesChart, إلخ) بنفس الطريقة مع التأكد من تطابق أسماء المتغيرات مع الرسوم البيانية.

});
$(function() {
  'use strict';

  var colors = {
    primary        : "#6571ff",
    secondary      : "#7987a1",
    success        : "#05a34a",
    info           : "#66d1d1",
    warning        : "#fbbc06",
    danger         : "#ff3366",
    light          : "#e9ecef",
    dark           : "#060c17",
    muted          : "#7987a1",
    gridBorder     : "rgba(77, 138, 240, .15)",
    bodyColor      : "#b8c3d9",
    cardBg         : "#0c1427"
  };

  var fontFamily = "'Roboto', Helvetica, sans-serif";

  // Date Picker
  if($('#dashboardDate').length) {
    flatpickr("#dashboardDate", {
      wrap: true,
      dateFormat: "d-M-Y",
      defaultDate: "today",
    });
  }

  // Customers Chart
  if($('#customersChart').length) {
    var options1 = {
      chart: { type: "line", height: 60, sparkline: { enabled: true } },
      series: [{ data: [3844, 3855, 3841, 3867, 3822, 3843, 3821, 3841, 3856, 3827, 3843] }],
      xaxis: { type: 'datetime', categories: ["Jan 01 2022", "Jan 02 2022", "Jan 03 2022", "Jan 04 2022", "Jan 05 2022", "Jan 06 2022", "Jan 07 2022", "Jan 08 2022", "Jan 09 2022", "Jan 10 2022", "Jan 11 2022"] },
      stroke: { width: 2, curve: "smooth" },
      markers: { size: 0 },
      colors: [colors.primary]
    };
    new ApexCharts(document.querySelector("#customersChart"), options1).render();
  }

  // Orders Chart 1
  if($('#ordersChart').length) {
    var options2 = {
      chart: { type: "bar", height: 60, sparkline: { enabled: true } },
      plotOptions: { bar: { borderRadius: 2, columnWidth: "60%" } },
      colors: [colors.primary],
      series: [{ data: [36, 77, 52, 90, 74, 35, 55, 23, 47, 10, 63] }],
      xaxis: { type: 'datetime', categories: ["Jan 01 2022", "Jan 02 2022", "Jan 03 2022", "Jan 04 2022", "Jan 05 2022", "Jan 06 2022", "Jan 07 2022", "Jan 08 2022", "Jan 09 2022", "Jan 10 2022", "Jan 11 2022"] }
    };
    new ApexCharts(document.querySelector("#ordersChart"), options2).render();
  }

  // Orders Chart 4
  if($('#ordersChart4').length) {
    var options2 = {
      chart: { type: "bar", height: 60, sparkline: { enabled: true } },
      plotOptions: { bar: { borderRadius: 2, columnWidth: "60%" } },
      colors: [colors.primary],
      series: [{ data: [36, 77, 52, 90, 74, 35, 55, 23, 47, 10, 63] }],
      xaxis: { type: 'datetime', categories: ["Jan 01 2022", "Jan 02 2022", "Jan 03 2022", "Jan 04 2022", "Jan 05 2022", "Jan 06 2022", "Jan 07 2022", "Jan 08 2022", "Jan 09 2022", "Jan 10 2022", "Jan 11 2022"] }
    };
    new ApexCharts(document.querySelector("#ordersChart4"), options2).render();
  }

  // يمكن إضافة باقي الشارتات (growthChart, revenueChart, monthlySalesChart, إلخ) بنفس الطريقة مع التأكد من تطابق أسماء المتغيرات مع الرسوم البيانية.

});
