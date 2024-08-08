Nama:Chairil Abizali
Kelas :XII RPL 1
Nomor urut : 6


```dart
void main() {

  kelompok1();

  kelompok2();

  kelompok3();

  kelompok4();

  kelompok5();

  kelompok6();

  kelompok7();

  kelompok8();

}

  

void kelompok1() {

  print("Kelompok 1: Operator");

  int hayril_a = 10;

  int hayril_b = 5;

  print("Penjumlahan: $hayril_a + $hayril_b = ${hayril_a + hayril_b}");

  print("Pengurangan: $hayril_a - $hayril_b = ${hayril_a - hayril_b}");

  print("Perkalian: $hayril_a * $hayril_b = ${hayril_a * hayril_b}");

  print("Pembagian: $hayril_a / $hayril_b = ${hayril_a / hayril_b}");

  print("");

}

  

void kelompok2() {

  print("Kelompok 2: Map, List, Set, Simbol");

  List<int> hayril_list = [1, 2, 3, 4, 5];

  Set<int> hayril_set = {1, 2, 3, 4, 5};

  Map<String, int> hayril_dict = {"satu": 1, "dua": 2, "tiga": 3};

  print("List: $hayril_list");

  print("Set: $hayril_set");

  print("Dictionary: $hayril_dict");

  print("");

}

  

void kelompok3() {

  print("Kelompok 3: Percabangan");

  int hayril_nilai = 75;

  String hayril_grade;

  if (hayril_nilai >= 85) {

    hayril_grade = "A";

  } else if (hayril_nilai >= 70) {

    hayril_grade = "B";

  } else if (hayril_nilai >= 55) {

    hayril_grade = "C";

  } else {

    hayril_grade = "D";

  }

  print("Nilai: $hayril_nilai, Grade: $hayril_grade");

  print("");

}

  

void kelompok4() {

  print("Kelompok 4: Perulangan");

  for (int hayril_i = 1; hayril_i <= 5; hayril_i++) {

    print("Perulangan ke-$hayril_i");

  }

  print("");

}

  

void kelompok5() {

  print("Kelompok 5: Function Parameter & Function Opsional");

  void hayril_salam(String nama, [String pesan = "Halo"]) {

    print("$pesan, $nama!");

  }

  

  hayril_salam("hayril");

  hayril_salam("latto", "Selamat pagi");

  print("");

}

  

void kelompok6() {

  print("Kelompok 6: Inner Function, Function Return Value, Function Short Expression");

  int hayril_fungsi_utama(int x) {

    int hayril_fungsi_dalam(int y) {

      return y + 1;

    }

    return hayril_fungsi_dalam(x);

  }

  

  int hayril_hasil = hayril_fungsi_utama(10);

  print("Hasil dari fungsi_utama: $hayril_hasil");

  

  int hayril_ekspresi_singkat(int x, int y) => x + y;

  print("Ekspresi singkat: 5 + 3 = ${hayril_ekspresi_singkat(5, 3)}");

  print("");

}

  

void kelompok7() {

  print("Kelompok 7: Anonymous Function & Scope");

  var hayril_jumlah_lambda = (int x, int y) => x + y;

  print("Anonymous function (lambda): 7 + 8 = ${hayril_jumlah_lambda(7, 8)}");

  

  String hayril_variabel_global = "Global";

  

  void hayril_luar() {

    String hayril_variabel_luar = "Luar";

  

    void hayril_dalam() {

      String hayril_variabel_dalam = "Dalam";

      print("Mengakses $hayril_variabel_global dari fungsi dalam");

      print("Mengakses $hayril_variabel_luar dari fungsi dalam");

      print("Variabel dalam: $hayril_variabel_dalam");

    }

  

    hayril_dalam();

  }

  

  hayril_luar();

  print("");

}

  

void kelompok8() {
  print("Kelompok 8: Closure");
  Function hayril_buat_pengali(int faktor) {
    return (int x) => x * faktor;

  }

  

  var hayril_kali3 = hayril_buat_pengali(3);

  var hayril_kali5 = hayril_buat_pengali(5);

  

  print("Closure dengan faktor 3: 3 * 10 = ${hayril_kali3(10)}");

  print("Closure dengan faktor 5: 5 * 4 = ${hayril_kali5(4)}");

  print("");

}
```

