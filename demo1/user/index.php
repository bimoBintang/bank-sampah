<?php ?>

<head>
    <link rel="stylesheet" href="../../demo1/css/user.css">
</head>


<main class="container">
            
            {/* slideBar */}
            <main class="bg-[#123C4B] flex-col justify-start items-start gap-[5px] inline-flex">
                <div class="p-5 m-16 h-[6rem] flex flex-col xs:relative xs:right-[50px] xs:top-[50px] rounded-[1rem] ">
                    <div class="container_header_nav_text">Saldo Anda</div>
                    <div class="container_header_nav__text">
                        <div>
                            <span class="container_header_nav__text_">Rp. 50.000</span>
                        </div>
                        <div class=" rounded-sm cursor-pointer border border-[stone]  gap-[5px] flex">
                            <h2 class="text-white text-[16px] font-bold font-['Poppins']">
                            Tarik saldo
                            </h2>
                    </div>
                </div>
              </div>
              <span class="w-[100%] h-20"></span>
            </main>
      
              {/* Mainbar */}
                <div class=" bg-[#123C4B] items-center justify-center flex relative bottom-[100px]">
                  <div class="w-[65rem] xs:w-[330px] xm:w-[430px] sm:w-[600px] md:w-[700px] lg:w-[1000px] xl:w-[1200px] 2xl:w-[1500px] h-[18rem] xs:h-[8rem] xm:h-[10rem] sm:h-[10rem] md:h-[11rem] xl:h-[15rem] lg:h-[15rem] bg-white rounded-[10px] shadow-2xl z-[100] lg:top-8 lg:relative">
                    <div>
                      <div class="h-[15rem] xs:h-[8rem] lg:h-[15rem] gap-10 flex justify-center items-center">
                        <div class="grid">
                          <a href="/user/jualsampah" class="xs:relative xs:left-3 w-[10rem] xs:w-[60px] sm:w-[90px] md:w-[100px] lg:w-[105px] h-[10rem] xs:h-[60px] xm:h-[75px] sm:h-[84px] md:h-[100px] lg:h-[100px] p-[5rem] xs:p-[15px] bg-[#123C4B] rounded-[20rem] xs:rounded-[50px] justify-center items-center gap-[15px] flex">
                          <FontAwesomeIcon class="relative left-[7px]" flip='horizontal' icon={faScaleBalanced} style={{color: "#fcfcfc",}} size='2xl' />
                            <div class="justify-start items-start gap-2.5 flex" />
                          </a>
                          <div class="text-cyan-950 text-[20px] xs:text-[11px] p-[8px] text-center font-semibold font-['Poppins']">Jual Sampah</div>              
                        </div>
                        <div class="grid">
                          <a href="/user/riwayat" class="relative right-1 w-[10rem] xs:w-[60px] sm:w-[90px] md:w-[100px] lg:w-[105px] h-[10rem] xs:h-[60px] xm:h-[75px] sm:h-[84px] md:h-[100px] lg:h-[100px] p-[5rem] xs:p-[15px] bg-[#123C4B] rounded-[20rem] xs:rounded-[50px] justify-center items-center gap-[15px] flex">
                          <FontAwesomeIcon class="relative left-[7px]" icon={faLandmark} style={{color: "#ffffff",}} size='2xl' />
                            <div class="justify-start items-start gap-2.5 flex" />
                          </a>
                          <div class="text-cyan-950 text-[20px] xs:text-[11px] p-[8px] text-center font-semibold font-['Poppins'] relative right-1">Riwayat</div>              
                        </div>
                        <div class="grid">
                          <div class="relative w-[10rem] xs:w-[60px] sm:w-[90px] md:w-[100px] lg:w-[105px] h-[10rem] xs:h-[60px] xm:h-[75px] sm:h-[84px] md:h-[100px] lg:h-[100px] p-[5rem] xs:p-[15px] bg-[#123C4B] rounded-[20rem] xs:rounded-[50px] justify-center items-center gap-[15px] flex">
                          <FontAwesomeIcon class="relative left-[7px]" icon={faMoneyCheck} style={{color: "#ffffff",}} size='2xl' />
                            <div class="justify-start items-start gap-2.5 flex" />
                          </div>
                          <div class="text-cyan-950 text-[20px] xs:text-[11px] p-[8px] text-center font-semibold font-['Poppins']">Keuangan</div>              
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
      
                <section class=" bg-[#fff] h-[70rem] xs:h-[46rem] xm:h-[58rem] sm:h-[58rem] md:h-[58rem] lg:h-[64rem]  xl:h-[70rem] relative bottom-[9rem] z-[5] rounded-[28px] xs:rounded-[16px] flex items-center justify-center flex-col gap-[50px]">
                  <div class="w-[65rem] h-[24rem] xs:h-[18rem] bg-[#123C4B] rounded-[18px] relative xs:w-[22rem] xm:w-[25rem] sm:w-[26rem] md:w-[27rem] lg:w-[65rem] xl:w-[65rem] 2xl:w-[65rem] ">
                    <div class="w-[40em] xs:w-[11rem] flex justify-center flex-col relative left-8 xs:left-4 top-16 xs:text-[12px] text-white"> 
                      <h2>Ubahlah Sampah Anorganik Anda Menjadi Uang Sekarang!</h2>
                      <p>Sabililah kepanjangan dari
                        "Sampah Bina Lindung Pilah" adalah aplikasi inovatif untuk
                          pengelolaan sampah di RW 11</p>
                    </div>
                    <Image
                      class="relative left-[36em] bottom-[7em] object-cover xs:w-[240px] xs:left-[10em]"
                      src={ImageProfil} 
                      alt="logo"
                      width={500}
                      height={50}
                      />
                  </div>
                  <div class=" w-[65rem] h-[24rem] xs:h-[8rem] bg-[#123C4B] rounded-[18px] relative xs:w-[22rem] xm:w-[25rem] sm:w-[26rem] md:w-[27rem] lg:w-[65rem] xl:w-[65rem] 2xl:w-[65rem]">
                    <h3 class="relative left-[25px] top-[1.5em] xs:text-[15px] text-white">KPP Bina Lindung</h3>
                    <div class="relative xs:bottom-12 w-[65rem] xs:w-[22rem] bg-[#FFFFFF] shadow-2xl xs:shadow-xl h-[14.5rem] xs:h-[5rem] flex mt-[5.6em] rounded-[18px] rounded-t items-center">
                      <div class="w-[20em]  h-[2em] relative left-[40px] flex items-center">
                        <div class="bg-lime-400 rounded-full w-[20px] h-[20px] absolute left-[20px]"></div>
                        <h2 class="absolute left-[45px] w-[10em] xs:text-[12px] ">SEDANG BUKA</h2>
                      </div>
                    </div>
                  </div>
                  <div class="relative left-[35rem] xs:left-[8rem] top-[9rem] bg-white shadow-2xl rounded-full">
                    <a href="/" class=" w-[120px] h-[120px] ">
                      <Image class="w-[100px] xs:w-[70px]" src={Kontak} alt="Contact" width={100}/>
                    </a>
      
                  </div>
                </section>
                <footer class="bg-slate-800 h-[8rem] relative">
                  
                </footer>
        </main>