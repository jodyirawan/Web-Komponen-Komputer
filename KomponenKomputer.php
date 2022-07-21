<!DOCTYPE html>
<html>
 
<head>
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <title>Komponen Komputer</title>
   <link rel="stylesheet" href="assets/style.css">
</head>

<body>
   <header>
      <div class="jumbotron">
         <h1>Komponen Pada Komputer</h1>
         <p>Alat Input, Proses dan Output Pada Komputer.</p>
      </div>
      <nav>
         <ul>
         <div class="dropdown">
            <li><a onclick="myFunction()" class="dropbtn1">Menu</a></li>
               <div id="myDropdown" class="dropdown-content">
                <a href="#input">Input</a>
                <a href="#proses">Proses</a>
                <a href="#output">Output</a>
               </div>   
            <li><a class="dropbtn" href="#input">Input</a></li>
            <li><a class="dropbtn" href="#proses">Proses</a></li>
            <li><a class="dropbtn" href="#output">Output</a></li>
         </div>
         </ul>
      </nav>
   </header>

   <main>
      <div id="content">
           <article id="input" class="card">
                 <h2 id="input">Alat Input</h2>
                 <p>Peralatan input pada komputer adalah perangkat yang memberikan perintah langsung atau data ke peralatan proses pada komputer untuk diproses kemudian dikeluarkan berupa informasi kepada pengguna. Peralatan input merupakan bagian komputer yang mempunyai peranan yang sangat penting karena langsung berhubungan dengan user atau pengguna komputer. Macam - macam perangkat masukan (Input Device): </p>

               <section>
                  <h3>1. Keyboard</h3>
                  <img src="assets/image/keyboard.jpg" class="featured-image" alt="keyboard">
                  <p>Keyboard adalah sebuah perangkat masukan yang digunakan untuk memasukan data berupa huruf, angka maupun symbol tertentu serta melakukan perintah-perintah untuk menyimpan file dan membuka file. Keyboard disebut juga sebagai papan ketik pada komputer.</p>
               </section>

               <section> 
                 <h3>2. Mouse</h3>
                 <img src="assets/image/mouse.jpg" class="featured-image" alt=mouse>
                 <p>Mouse adalah sebuah perangkat masukan yang berguna sebagai penunjuk posisi kursor/pointer pada layar monitor.</p>
               </section>

               <section> 
                 <h3>3. Graphic Pads</h3>
                 <img src="assets/image/pads.jpg" class="featured-image" alt=GraphicPads>
                 <p>Graphic Pads adalah perangkat yang digunakan untuk menggambar objek pada monitor.</p>
               </section>
            </article>

            <article id="proses" class="card">
                 <h2 id="proses">Alat Proses</h2>
                 <p>Peralatan Proses Alat proses adalah alat-alat yang berfungsi mengolah data kedalam komputer setelah mengalami proses Input. Macam macam perangkat proses:</p>

               <section>
                  <h3>1. Processor</h3>
                  <img src="assets/image/processor.jpg" class="featured-image" alt="processor">
                  <p>Berfungsi sebagai pengolah data serta  membaca instruksi dari memori tentang  apa yang harus dilakukan dan  mengeksekusinya.</p>
               </section>

               <section> 
                 <h3>2. VGA Card</h3>
                 <img src="assets/image/vga.png" class="featured-image" alt=vgacard>
                 <p>Untuk menampilkan output process ke  monitor.</p>
               </section>

               <section> 
                 <h3>3. RAM</h3>
                 <img src="assets/image/ram.jpg" class="featured-image" alt=ram>
                 <p>Berfungsi untuk menyimpan data dan instruksi  yang dibutuhkan untuk menyelesaikan  sebuah perintah.</p>
               </section>

               <section> 
                 <h3>4. Harddisk</h3>
                 <img src="assets/image/harddisk.jpg" class="featured-image" alt=harddisk>
                 <p>Berfungsi untuk menjalankan seluruh sistem operasi dan  mekanisme kerja kantor serta menyimpan  setiap data dan informasi.</p>
               </section>
            </article>

            <article id="output" class="card">
                 <h2 id="output">Alat Output</h2>
                 <p>Peralatan Output pada komputer adalah merupakan komponen komputer yang berfungsi menghasilkan informasi yang diperoleh dari hasil proses dari peralatan proses komputer. Output hasil proses dari komputer digolongkan menjadi 4 bentuk yaitu: huruf, gambar, suara dan video. Peralatan output akan menghasilkan informasi untuk manusia sehingga bisa dibaca, dilihat, didengar dan dipahami. Macam - Macam Perangkat Keluaran (Output Device):</p>

               <section>
                  <h3>1. Monitor</h3>
                  <img src="assets/image/monitor.jpg" class="featured-image" alt="monitor">
                  <p>Monitor adalah sebuah perangkat keras yang digunakan untuk mengeluarkan hasil pemerosesan yang dilakukan oleh komputer berupa informasi yang dibutuhkan oleh orang yang memakai komputer.</p>
               </section>

               <section> 
                 <h3>2. Speaker</h3>
                 <img src="assets/image/speaker.png" class="featured-image" alt=speaker>
                 <p>Speaker adalah perangkat keras yang berfungsi untuk mengeluarkan hasil pemerosesan berupa suara dari komputer.</p>
               </section>

               <section> 
                 <h3>3. Printer</h3>
                 <img src="assets/image/printer.jpg" class="featured-image" alt=printer>
                 <p>Printer adalah perangkat keras keluaran yang digunakan untuk mencetak data seperti gambar/foto, tulisan pada media kertas.</p>
               </section>
            </article>
      </div>

      <aside>
            <article class="profile card">
                <header>
                   <h2>Biodata</h2>
                   <figure>
                       <img src="assets/image/profile.jpg">
                   </figure>
               </header>
               <section>
                  <h3>Profile</h3>
                  <table>
                     <tr>
                        <th>Nama</th>
                        <td>Jody Irawan</td>
                     </tr>
                     <tr>
                        <th>Tempat/Tanggal Lahir</th>
                        <td>Bandung/16 Februari 2000</td>
                     </tr>
                     <tr>
                        <th>No Telepon</th>
                        <td>081313635722</td>
                     </tr>
                     <tr>
                        <th>E-Mail</th>
                        <td>jodi.irawan94@gmail.com</td>
                     </tr>
                  </table>
               </section>
            </article>
      </aside>
   </main>

   <footer>
      <p>Komponen Komputer &#169; 2021, Jody Irawan</p>
   </footer>
   <script src="assets/webjs.js"></script>
</body>
</html>
