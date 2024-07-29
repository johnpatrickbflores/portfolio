from time import perf_counter


def replace(filename, substr, new_substr):
    print(f'Processing the file {filename}')
    # get the contents of the file
    with open(filename, 'r') as f:
        content = f.read()

    # replace the substr by new_substr
    content = content.replace(substr, new_substr)

    # write data into the file
    with open(filename, 'w') as f:
        f.write(content)


def main():

    filenames = [
        'temp/test1.txt',
        'temp/test2.txt',
        'temp/test3.txt',
        'temp/test4.txt',
        'temp/test5.txt',
        'temp/test6.txt',
        'temp/test7.txt',
        'temp/test8.txt',
        'temp/test9.txt',
        'temp/test10.txt',
        'temp/test11.txt',
        'temp/test12.txt',
        'temp/test13.txt',
        'temp/test14.txt',
        'temp/test15.txt',
        'temp/test16.txt',
        'temp/test17.txt',
        'temp/test18.txt',
        'temp/test19.txt',
        'temp/test20.txt',
        'temp/test21.txt',
        'temp/test22.txt',
        'temp/test23.txt',
        'temp/test24.txt',
        'temp/test25.txt',
        'temp/test26.txt',
        'temp/test27.txt',
        'temp/test28.txt',
        'temp/test29.txt',
        'temp/test30.txt',
        'temp/test31.txt',
        'temp/test32.txt',
        'temp/test33.txt',
        'temp/test34.txt',
        'temp/test35.txt',
        'temp/test36.txt',
        'temp/test37.txt',
        'temp/test38.txt',
        'temp/test39.txt',
        'temp/test40.txt',
        'temp/test41.txt',
        'temp/test42.txt',
        'temp/test43.txt',
        'temp/test44.txt',
        'temp/test45.txt',
        'temp/test46.txt',
        'temp/test47.txt',
        'temp/test48.txt',
        'temp/test49.txt',
        'temp/test50.txt',
    ]

    for filename in filenames:
        replace(filename, 'ids', 'id')


if __name__ == "__main__":
    start_time = perf_counter()

    main()

    end_time = perf_counter()
    print(f'It took {end_time- start_time :0.2f} second(s) to complete.')
    