<!-- What is an Operating System -->
<!-- Reference - https://www.youtube.com/watch?v=2i2N_Qo_FyM&list=PLEbnTDJUr_If_BnzJkkN_J0Tl3iXTL8vq&index=1&t=0s -->

- it is an interface between the user and the hardware
- the operating system handles the system calls

- it allocates resources to different things
- when multiple processes are working together, resources (cpu, memory, device or file) are allocated to
these processes

- it acts as a manager
- handles and keeps check of what process is handling what, how much memory is allocated to that
process, security, files etc.

<!-- What are the main goals of an Operating System -->

- Primary goal is convenience
Eg - Mac, Windows, Linux

- Secondary goal is efficiency
Eg - Mainfraime, DOS (used by experts)

<!-- What is a system call -->
- statements like "printf" are handled by system call
eg - Write

<!-- Types of Operating System -->

1. Batch processing
- (everyone was given access to the mainframe, everyone would execute their programs
and after sometime the output would be generated and the users will pick up the output after some time)
- the problem with this processing was that if the first job takes a lot of time, the other jobs won't running for that time

** Processes require either CPU time and Input/Output time
- even if the CPU is idle, other jobs will still not be able to take the CPU till the I/O operation is being done

** efficiency is less

2. MultiProgramming
- here, whenever a job wants I/O time, then CPU can take the next job
- here, CPU will be used efficiently

3. Multitasking
- here, multiple jobs will be executed time to time
- each job will be given some time periodically (no job might be completed)

4. Multiprocessing
- lots of CPU will be present unlike the above processing systems
- three jobs will be allocated to three different CPUs
- the number of jobs being finished per unit time (throughput) is good
- jobs will be completed fast
- if one processor fails, the other will be able to handle the jobs

5. Realtime
- here the jobs have to be finished in the deadline
- if not done, there will be huge losses or even if it is done after the deadline, that job will be useless

<!-- All about processes -->
<!-- Reference - https://www.youtube.com/watch?v=ucVm_arB-fw&t=0s&index=2&list=PLEbnTDJUr_If_BnzJkkN_J0Tl3iXTL8vq -->

- Let us assume we are trying to run a c++ program by the name "ex.cpp"
- first this program will be converted to machine level language

- the compiler will generate an object file and this object file will be sent to the secondary memory(hard disk)
- the OS will pick up this file, place it in the main memory (RAM) and start running it
- A separate process datastructure will be created for this particular file.
- this is when we say a process is running

** Program is a virtual concept (like a soul) while process is a physical entity (like body)

<!-- Representation of process structure in main memory -->

https://imgur.com/a/hK8sY

- SV and GV stand for static and global variables
- Heap is used for dynamic memory allocation
- Stack is used for the recursive function calls

- The process will work within the range of this process body.
- if we try to access anything beyond this allocated body, we get "Segmentation Fault"

- Heap grows upwards and Stack grows downwards
- Whichever needs more space takes up more part of the process body

<!-- Attributes of a Process -->

1. Process id
    - tells which process is what, how many processes are there, what is the state of the process
    - unique number given to identify a process

2. Program counter
    - While we are executing a process, we stop the process and restart it , we need to know from which point it should start the
    execution
    - different instructions were executing and we stopped it at "I6". after starting the process again, from which instruction do we need
    to restart the execution

3. Process state
    - ready, running etc

4. Priority
    - Different level of preferences of execution are assigned to all process
    - it is a number

5. General purpose registers
    - When we are executing a program, the CPU will make use of registers for storing some data

     Let Process "P1" be executing
     - Let R1=1, R2=3, R3=5;
     - Let P1 execute till the instruction I4 (R1 = R2 + R3)
     - Let P1 be preempted (Stopped in between) by some process "P2"

     - It is possible that "P2" might also be using the registers "R1, R2, R3" and might change their values during its execution
     - When the process "P1" is restarted, the values of R1 = R2 + R3 will have changed

     - To avoid this, when every a Process is preempted, its corresponding register values should also be stored at some location so they
     remain unchanged during the execution of any other process

6. List of open files
- During a process, some files must have been opened for reading or writing
- we have to maintain which process has opened which file
- the files have to be consistent to be able to be efficiently used by all other processes

7. List of open devices
- Hardware devices

8. Protection
- One process should not be able to access the resources allocated to any other process

** For every process , Process Control Block will be created
https://imgur.com/a/t9sYn
