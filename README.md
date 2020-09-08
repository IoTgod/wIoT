# wIoT
>This Project is not finished!!!!

This project aims to help web developers who are not familiar with firmware programming to implement their own IoT applications. You only need a server inside the network (such as Raspberry Pi) and several MCUs (single-chip computers) that support networking (via serial port, WiFi, LoRa, Bluetooth, Zigbee, etc.), you can easily create and manage your own Internet of Things Cluster.


> Please refer to this [Blog](https://www.eee.dog/tech/wiot.html) for details..            
> 请查看这篇[博客](https://www.eee.dog/tech/wiot.html)

-------------------------------------------
The following is history

---------------------------------

## 快速开始

请参考如下文档：     
[**New Docs Click Here**](https://wiot.yimian.xyz/)




## wiot历史
wiot 源自2018年暑假我在自家设计的云端交互的物联网系统。最初的wiot系统包含一个控制太阳能加水电磁阀的单片机，以及控制走廊灯以及几个pir传感器的单片机。2019年的寒假，我进一步接入了厨房，客厅，餐厅的灯控，并配置了一系列人体传感器，光敏传感器，震动传感器，蜂鸣器，声敏传感器等，并以1s/次的采样率记录数据到本地的mysql数据库。此后，我认为之前做的物联网部署工作有许多重复步骤，因此希望将重复的部分框架化，并总结成一套自动化的程序。这就是现在wiot的来源。因此与旧wiot不同，新wiot是一套框架，致力于让web开发者无需了解任何固件知识即可轻松使用NodeJS搭建物联网集群。

> 旧wiot更名为[sola](https://github.com/iotcat/sola)




