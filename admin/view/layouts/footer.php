<footer>
                <div class="footer clearfix mb-0 text-muted">
                    <div class="float-start">
                        <p>2021 &copy; Mazer</p>
                    </div>
                    <div class="float-end">
                        <p>Crafted with <span class="text-danger"><i class="bi bi-heart"></i></span> by <a
                                href="http://ahmadsaugi.com">A. Saugi</a></p>
                    </div>
                </div>
            </footer>
        </div>
    </div>
    <script src="./asset/vendors/perfect-scrollbar/perfect-scrollbar.min.js"></script>
    <script src="./asset/js/bootstrap.bundle.min.js"></script>

    <script src="./asset/vendors/apexcharts/apexcharts.js"></script>
    <script src="./asset/js/pages/dashboard.js"></script>
<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>
<!-- Tempus Dominus JS -->
<script src="https://cdn.jsdelivr.net/npm/@eonasdan/tempus-dominus/dist/js/tempus-dominus.min.js"></script>

    <script src="./asset/js/main.js"></script>
    <script src="./asset/vendors/simple-datatables/simple-datatables.js"></script>
    <script>

        let sideDASH =document.getElementById('sad')
        let sideDAN =document.getElementById('san')
        let sideDAP =document.getElementById('sap')
        let sideUSR =document.getElementById('sus')
        let sideBL =document.getElementById('sbl')
        let sideHD =document.getElementById('shd')
        let datacheck = document.getElementById('datacheck')
        
        if(datacheck){
            console.log(datacheck);
        if(datacheck.textContent == 'Doanh thu tháng'){
            sideHD.classList.remove('active')
            sideDAP.classList.remove('active')
            sideUSR.classList.remove('active')
            sideBL.classList.remove('active')
            sideDASH.classList.add('active')
            sideDAN.classList.remove('active')
        }
        if(datacheck.textContent == 'Hóa đơn'){
            sideHD.classList.add('active')
            sideDASH.classList.remove('active')
            sideBL.classList.remove('active')
            sideUSR.classList.remove('active')
            sideDAN.classList.remove('active')
            sideDAP.classList.remove('active')
        }
        if(datacheck.textContent == 'Danh mục'){
            sideHD.classList.remove('active')
            sideDAN.classList.add('active')
            sideBL.classList.remove('active')
            sideUSR.classList.remove('active')
            sideDASH.classList.remove('active')
            sideDAP.classList.remove('active')
        }
        if(datacheck.textContent == 'Sản phẩm'){
            sideDAP.classList.add('active')
            sideUSR.classList.remove('active')
            sideDASH.classList.remove('active')
            sideBL.classList.remove('active')
            sideDAN.classList.remove('active')
            sideHD.classList.remove('active')
        }
        if(datacheck.textContent == 'Danh sách User'){
            sideUSR.classList.add('active')
            sideBL.classList.remove('active')
            sideDASH.classList.remove('active')
            sideDAN.classList.remove('active')
            sideDAP.classList.remove('active')
            sideHD.classList.remove('active')
        }
        if(datacheck.textContent == 'Bình luận'){
            sideBL.classList.add('active')
            sideUSR.classList.remove('active')
            sideDASH.classList.remove('active')
            sideDAN.classList.remove('active')
            sideDAP.classList.remove('active')
            sideHD.classList.remove('active')
        }
    }
            // Simple Datatable
            let table1 = document.querySelector('#table1');
        let dataTable = new simpleDatatables.DataTable(table1);

    </script>
</body>

</html>