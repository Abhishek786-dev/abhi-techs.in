1. Domain Name: 
    - it's nothing but a simple name of business, where users/client can easily memorized and 
        easily find out the website over the internet.
    - Domain name is mapping with IP(Internal Protocol) Address but it's very difficult to remember IP Address,
        that's why DNS help there to mapp domain name to IP address.
    - Ex: abhi-techs.in
    - A subdomain is a portion of your domain. Ex: python.abhi-techs.in

2. Top-level domains:
    - each domain has attached with extesion like below
        * .com - registered by commercial organizations
        * .in  - Internet country code
        * .org - registered and used primarily by non-profit organizations
        * .edu - registered and used for education purpose
    - TLD also know as domain extension.

3. Deploy Static website on Ec2 Instance 

    - If we want to attached domain name to hosting server so for that,
        we need domain server also where we can setup DNS.
    - else we can directly open website through IP address. 

    3.1 DNS Management
        - If we are going to deploying webesite for domain name(ex:abhi-techs.in) so then,
            we just need add hosting server IP Address for A records like below.
        - If you want to deploy webesite for subdomain then ,
            you have to create CNAME records as subdomain like below

    3.2 Create Ec2 instace on AWS.
        - visit aws console portal & login (https://console.aws.amazon.com/console/home)
        - after login on aws portal then search EC2 service and click on it. 
            after that you can able to see below kind of UI.
        - NOTE : before select ec2 instance, select region according to you because 
            price of services will change by region.
        - click on Ec2 Instance then You can able to see all instaces list . 
            on right corner there button for launch new instance.
        - once you will click on launch btn, one page will open 
            where you can select instance type according to your requirement.
        - here demo purpose, I'm going to select 
            - ubuntu 20.04 
            - t2.micro free tier
        - Next step is important for do login on instance, so if you want to exsting pem/ppk file then select existing key-pair name, 
            you can create new one.
            - pem file for openSSH
            - ppk file putty connect
        - next step for configure security group, 
            - here you can setup traffic on you server.
            - you can allow any protocol on specific IP also.
            - this is important for your server security.
        - next if you want increase volumn(storage) for your instace , so you can setup these things here.
            - by default , it's provide 8 Gb SSD
        - then last step click on Launch Instance, it'll take few minute for up and running stage.
        - once instance is running then you can able see below kind of UI.
        - if you want to see all details about instance then check instace checkbox, all details will appear below on screen.
        - for do login on instace so check the checkbox of instance then click on connect button
        - open putty software : past Public DNS in putty software follow below snapshot.
        - once you loing then run following command for install apache2
            - sudo apt update
            - sudo apt install apache2
        - just for confirmation that , apache2 is installed or not , past public IP on browser.
            if you are able to see this page mean apache2 install.
        - after that, go to html directory and past your project here 
        - 
    