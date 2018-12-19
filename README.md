README.md

1. Step1: Go to folder contain file 'docker-compose.yml' and run command: docker-compose up -d
2. Step2: Create alias ip: Must get correct 'en0' or 'enp3s0' for create

	- Mac: sudo ifconfig en0 alias 10.254.254.254 255.255.255.0
	- Linux: sudo ip addr add 10.254.254.254/24 dev enp3s0 label enp3s0:1

3. cd to /source and run command : sudo chmod -R 777 var/* generated/*

4. Step4 : add to host file: 127.0.0.1 mage2.dev

5. Step5 : Goto site by url: http://mage2.dev:602
