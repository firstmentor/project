@extends('website.layouts.master')

@section('content')
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<!--   <div class="dropdown">
  <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
    Menu
  </button>
  <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
    <a class="dropdown-item" href="websitehome.html">HOME </a>
    <a class="dropdown-item" href="os.html">OPERATING SYSTEM </a>
    <a class="dropdown-item" href="se.html">SOFTWARE ENGINEERING</a>
    <a class="dropdown-item" href="ada.html">DATA STRUCTURE</a>
  </div>
  </div> -->

	<div class="col-md-12">
	    <div class="card-mx-auto" style="height:100%;width:100%;">  
        <img src="images/os1.jpg" style="width:100%;height:100%;" class="img-fluid">
        </div>


    <div class="card" style="width:100%;height: 100%">
    <div class="card-body">
    <CENTER><b><h2 class="card-title">SYSTEM CALL</h2></b>
    <img src="images/os2.jpg" class="card-img-top" alt="...">
    <p class="card-text">A system call is a way for file:///C:/Users/jmd/Desktop/rjit/image/se2.jpgprograms to interact with the operating system. A computer program makes a system call when it makes a request to the operating system's kernel. System calls are used for hardware services, to create or execute a process, and for communicating with kernel services, including application and process scheduling</p>
    <a href="#" class="btn btn-primary">See More</a></CENTER>
    </div>
    </div>
       
       <div class="card" style="width:100%;height: 100%">
    <div class="card-body">
    <CENTER><b><h2 class="card-title">FILE SYSTEM</h2></b>
    <img src="images/os3.jpg" class="card-img-top" alt="...">
    <p class="card-text"> File System. File. A file is a named collection of related information that is recorded on secondary storage such as magnetic disks, magnetic tapes and optical disks. In general, a file is a sequence of bits, bytes, lines or records whose meaning is defined by the files creator and user.</p>
    <a href="#" class="btn btn-primary">See More</a></CENTER>
    </div>
    </div>

    <div class="card" style="width:100%;height: 100%">
    <div class="card-body">
    <CENTER><b><h2 class="card-title">BOOTING </h2></b>
    <img src="images/os4.png" class="card-img-top" alt="...">
    <p class="card-text">The operating system is loaded through a bootstrapping process, more succinctly known as booting. A boot loader is a program whose task is to load a bigger program, such as the operating system. When you turn on a computer, its memory is usually uninitialized. Hence, there is nothing to run.</p>
    <a href="#" class="btn btn-primary">See More</a></CENTER>
    </div>
    </div>

    <div class="card" style="width:100%;height: 100%">
    <div class="card-body">
    <CENTER><b><h2 class="card-title">KERNAL MODE</h2></b>
    <img src="images/os5.jpg" class="card-img-top" alt="...">
    <p class="card-text"> In kernel mode shares a single virtual address space. This means that a kernel-mode driver is not isolated from other drivers and the operating system itself. If a kernel-mode driver accidentally writes to the wrong virtual address, data that belongs to the operating system or another driver could be compromised.</p>
    <a href="#" class="btn btn-primary">See More</a></CENTER>
    </div>
    </div>

    <div class="card" style="width:100%;height: 100%">
    <div class="card-body">
    <CENTER><b><h2 class="card-title">SEHEDULING</h2></b>
    <img src="images/os6.jpg" class="card-img-top" alt="...">
    <p class="card-text">The process scheduling is the activity of the process manager that handles the removal of the running process from the CPU and the selection of another process on the basis of a particular strategy. Process scheduling is an essential part of a Multiprogramming operating systems.</p>
    <a href="#" class="btn btn-primary">See More</a></CENTER>
    </div>
    </div>
    </div>

  
</body>
</html>
@endsection