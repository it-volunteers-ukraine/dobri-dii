const reportsBtn=document.querySelector(".reports-btn");function showMoreReports(){const e=document.querySelectorAll(".reports-list .report-item:not(.visible-on-mobile)");let t=0;e.forEach((o=>{t<3&&o.classList.add("visible-on-mobile"),t++,e.length<3&&reportsBtn.classList.add("hide-report-btn")}))}reportsBtn.addEventListener("click",showMoreReports);