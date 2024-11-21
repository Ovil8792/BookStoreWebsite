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

    <script src="./asset/js/main.js"></script>
    <script src="./asset/vendors/simple-datatables/simple-datatables.js"></script>
    <script>
        // Simple Datatable
        let table1 = document.querySelector('#table1');
        let dataTable = new simpleDatatables.DataTable(table1);

        let sideDASH =document.getElementById('sad')
        let sideDAN =document.getElementById('san')
        let datacheck = document.getElementById('datacheck')
        
        if(datacheck){
            console.log(datacheck);
        if(datacheck.innerText == 'Following'){
            sideDASH.classList.add('active')
            sideDAN.classList.remove('active')
        }
        if(datacheck.innerText == 'DataTable'){
            sideDAN.classList.add('active')
            sideDASH.classList.remove('active')
        }
    }
    </script>
</body>

</html>