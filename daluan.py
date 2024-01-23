import os
import random

# 获取当前文件夹下所有txt文件的路径
file_paths = [file for file in os.listdir() if file.endswith('.txt')]

# 遍历每个txt文件
for file_path in file_paths:
    # 读取文件内容
    with open(file_path, 'r') as file:
        lines = file.readlines()

    # 打乱每行的顺序
    random.shuffle(lines)

    # 将打乱后的内容写入文件
    with open(file_path, 'w') as file:
        file.writelines(lines)