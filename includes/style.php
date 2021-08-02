<style>
    nav {
        font-family: 'Nunito', sans-serif;
        /* font-family: 'Brush Script MT', cursive; */
        /* height: 10vh; */
    }
    .cust-btn{
        border: orangered 1px solid;
        color: white;
    }
    .cust-btn:hover{
        background-color: orangered;
        color: white;
    }

    .bg-black {
        background-color: black;
    }

    .main-header {
        background-image: url(./images/vplayer.jpg);
        background-position: center;
        background-size: cover;
        background-repeat: no-repeat;
        height: 90vh;
        position: absolute;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        z-index: 1;
    }

    .overlay {
        height: 90vh !important;
        position: absolute;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        z-index: 2;
        background-color: rgba(0, 0, 0, 0.6);
    }

    .wrap {
        position: relative;
    }

    .ontop {
        height: 90vh;
        position: absolute;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        z-index: 3;
        color: white;
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: center;
    }

    .stream-btn {
        z-index: 3;
        border-radius: 50px;
        background-color: orangered;
        color: white;
    }

    .stream-btn:hover {
        background-color: white;
        color: black;
    }

    .relative {
        position: relative;
    }

    .bg-side {
        background-size: cover;
        position: relative;
    }

    .bg-login {
        background-image: url(./images/vplayer.jpg);
    }

    .bg-signup {
        background-image: url(./images/housemates.png);
    }

    .my-radius {
        border-radius: 10px;
    }

    .left-radius {
        border-radius: 10px 0px 0px 10px;
    }

    .overlay {
        position: absolute;
        background-color: rgba(0, 0, 0, 0.604);
        z-index: 1;
        height: 100%;
        width: 100%;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        border-radius: 10px 0px 0px 10px;
    }
</style>