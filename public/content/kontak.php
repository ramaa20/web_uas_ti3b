<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
            <div class="container">
    <div class="card-container">
        <div class="left">
            <div class="left-container">
            <h2>Tentang saya</h2>
            <p>Perkenalkan Nama Saya La Ode Rama. Saya Adalah Mahasiswa yang Berkuliah di ITB-Stikom Ambon</p>
            <br />
            <p>Alamat: Jln. Jendral Sudirman, kapaha</p>
            <p>kontak: 082198623782</p>
            </div>
        </div>
        <div class="right">
        <div class="right-container">
            <form action="">
            <h2>Hubungi Kami</h2>
              <input type="text" placeholder="Nama" />
              <input type="email" placeholder="Alamat Email" />
              <input type="text" placeholder="Universitas" />
              <input type="phone" placeholder="No.Hp" />
              <textarea rows="10" placeholder="Pesan"></textarea> 
                <button>Kirim</button>
            </form>
        </div>
       </div>
        </div>

        </div>
        </body>

        </html>
            </div>
        </div>
    </div>
</div>

<style type="text/css">
    * {
    box-sizing: border-box;
    margin: 0;
}

body {
    display: flex;
    justify-content: center;
    align-items: center;
    flex-direction: column;
    font-family: "Montserrat", sans-serif;
    height: 100vh;
    margin: -20px 0 50px;
    padding: 10px;
}
.card-container {
    display: flex;
}

.left {
    flex: 1;
    height: 480px;
    background-color: #00b4cf;
}

.right {
    display: flex;
    flex: 1;
    height: 460px;
    background-color: #ffffff;
    justify-content: center;
    align-items: center;
}

.left {
    display: flex;
    flex: 1;
    height: 522px;
    justify-content: center;
    align-items: center;
    color: #ffffff;
}


.left-container {
    height: 50%;
    width: 80%;
    text-align: center;
    line-height: 22px
}

.left p {
    font-size: 0.9rem;
}

h2 {
    font-size: 2rem;
    margin-bottom: 1rem;
}

.right-container {
    width: 70%;
    height: 80%;
    text-align: center;
}

input,
textarea {
    background-color: #eee;
    border: none;
    padding: 12px 15px;
    margin: 8px 0;
    width: 100%;
    font-size: 0.8rem;
}

input:focus,
textarea:focus {
    outline: 1px solid #00b4cf;
}

button {
    border-radius: 20px;
    border: 1px solid #00b4cf;
    background-color: #00b4cf;
    color: #ffffff;
    font-size: 12px;
    font-weight: bold;
    padding: 12px 45px;
    letter-spacing: 1px;
    text-transform: uppercase;
    transition: transform 80ms ease-out;
    cursor: pointer;
}

button:hover {
    opacity: 0.7;
}

textarea {
    height: 90px;
}
</style>