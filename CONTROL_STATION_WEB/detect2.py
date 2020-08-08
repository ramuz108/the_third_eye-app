#!/usr/bin/env python
from imageai.Detection import VideoObjectDetection
import os
import time as t
import cv2
import datetime
import sys



def forSeconds(second_number, output_arrays, count_arrays, average_output_count):
    x=output_arrays
    print(x)
    if x[0]['name']=='person' :
        print('Got it!!!!')
        sys.exit("person") 
    print("------------END OF A FRAME --------------")



execution_path = os.getcwd()
camera = cv2.VideoCapture(0)

detector = VideoObjectDetection()
detector.setModelTypeAsRetinaNet()
detector.setModelPath(os.path.join(execution_path , "resnet50_coco_best_v2.0.1.h5"))
detector.loadModel()


detections = detector.detectObjectsFromVideo(camera_input=camera,save_detected_video=False,frames_per_second=20,per_frame_function=forSeconds, minimum_percentage_probability=30, return_detected_frame=True)







