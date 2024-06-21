<style>
    * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
        font-family: "Poppins", sans-serif;
    }


    .sidenavbar {
        height: 90%;
        width: 200px;
        background-color: rgba(55, 55, 55, 0.250);
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: flex-start;
    }


    .sidenavbar h1 {
        text-transform: uppercase;
        font-size: 30px;
        margin-top: 20px;
        width: 200px;
        display: flex;
        align-items: center;
        justify-content: center;
    }

    .sidenavbar .sidenav-items {
        margin-top: 40px;
        padding-left: 10px;
        color: white;
    }

    .sidenavbar .sidenav-items ul {
        list-style: none;
        padding: 0;
        width: 100%;
        /* Adjusted width for responsiveness */
    }

    .sidenavbar .sidenav-items ul li {
        width: 200px;
        padding: 20px 10px;
        /* Increased padding for better touch targets */
        transition: background-color 0.5s, border-left 0.5s;
    }

    .sidenavbar .sidenav-items ul li a {
        text-decoration: none;
        color: inherit;
        display: flex;
        align-items: center;
        justify-content: flex-start;
        gap: 15px;
        text-align: start;
    }

    .sidenavbar .sidenav-items ul li:hover {
        width: 195px;
        border: 2px solid rgb(172, 153, 153);
        background-color: rgba(55, 55, 55, 1);
    }
</style>

<nav class="sidenavbar">
    <div class="logo">
        <h1>Tech Tonic</h1>
    </div>
    <div class="sidenav-items">
        <ul>
            <li> <a href="login.php">
                    <span class="material-symbols-outlined">
                        grid_view
                    </span>
                    Dashboard</a>
            </li>
            <li> <a href="login.php">
                    <span class="material-symbols-outlined">
                    receipt_long
                    </span>
                    Bill</a>
            </li>
            <li> <a href="login.php">
                    <span class="material-symbols-outlined">
                    lab_panel
                    </span>
                    Test Items</a>
            </li>
            <li> <a href="login.php">
                    <span class="material-symbols-outlined">
                    patient_list
                    </span>
                    Patients</a>
            </li>
            <li> <a href="login.php">
                    <span class="material-symbols-outlined">
                    account_balance
                    </span>
                    Accounts</a>
            </li>
        </ul>
    </div>
</nav>