## Profile

```
Name: Mohamad Rifqi Shiddiq
Birth Place & Date: Bandung, August 8th 1997
Address: Puri Indah D/07 Sidoarjo
Last Education: Diploma III of EEPIS (waiting for the graduation certificate)
Phone Number: 087773589507
```

## Getting Started

Clone this project in your htdocs directory

Start your mysql service

Create new database with the name "krs-api", and then import "krs-api.sql" in directory "/src/db" 

Open git bash inside the project directory, and then write command

```
$ php bin/console server:run
```

After the server started, go to

```
http://localhost:8000/api
```
Now the project are already stared and it shows the models and the API of each entity

Because we will try to filling out the study program card, let's start from filling the college student's data

Open the post method of "Mahasiswa" API, and then try to input the students name

```
{
  "namaMahasiswa": "New Student",
}
```

Student's data is now stored in the database. You can check it using get method

After that, open the post method of "PivotMahasiswaJurusanJenjangPendidikan" API, and then input the data

```
{
  "idMahasiswa": "/api/mahasiswas/{id}",
  "idJurusan": "/api/jurusans/1",
  "idJenjangPendidikan": "/api/jenjang_pendidikans/1",
  "nim": "2103161046"
}
```

{id} in "idMahasiswa" are depends on which student do you want to choose from Mahasiswa entity (use the id from student you just added)

Now start to work on the study program card. Open the post method in "KrsSemester" API, and then input

```
{
  "idPivotMahasiswa": /api/pivot_mahasiswa_jurusan_jenjang_pendidikans/{id}",
  "semester": 1,
  "sks": 22
}
```

Now student's semester and university credit units have been registered

And then you can fill the study program card by opening the post method on "KrsMahasiswa" API, and then input 

```
krs_mahasiswa
{
  "idKrsSemester": "/api/krs_semesters/{id}",
  "idKelas": "/api/kelas/3"
}
```
