
<style>
* {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    font-family: "Poppins", sans-serif;
}

body {
    background-image: url(https://as1.ftcdn.net/v2/jpg/02/19/91/48/1000_F_219914874_fcqxEeJ6clfwf43OcCNAMGNBySKzF5hl.jpg) ;
    background-size: cover;
    height: 100vh;
    width: 100vw;
}

nav{
    height: 10%;
    width: 100%;
    background-color: rgba(55, 55, 55, 0.250);
    display: flex;
    align-items: center;
    justify-content: space-between;
    padding: 5px 50px;

}

nav .logo img{
    display: flex;
    align-items: center;
    justify-content: center;
    height: 80px;
    border-radius: 50%;
}

nav .nav-items ul{
    display: flex;
    align-items: center;
}

nav .nav-items ul li{
    display: inline-flex;
    align-items: center;
    list-style: none;
    margin-left: 30px;
    gap: 10px;
    width: 120px;
    display: flex;
    align-items: center;
    justify-content: center;
}

.nav .nav-items ul li:hover {
        border: 2px solid rgb(172, 153, 153);
        background-color: rgba(55, 55, 55, 1);
    }
</style>
<body>
    <nav class="navbar">
        <div class="logo">
            <img src="assets/Image/logo.jpg" alt="Logo">
        </div>
        <div class="nav-items">
            <ul>
                <li> <span class="material-symbols-outlined">
                    grid_view
                    </span> Dashboard</li>
                <li> <span class="material-symbols-outlined">
                    receipt_long
                    </span> Bill</li>
                <li> <span class="material-symbols-outlined">
                    lab_panel
                    </span> Test Items</li>
                <li> <span class="material-symbols-outlined">
                    patient_list
                    </span> Patients</li>
                <li> <span class="material-symbols-outlined">
                    account_balance
                    </span> Accounts</li>
            </ul>
        </div>
    </nav>
