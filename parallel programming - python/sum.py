import threading
import time


def calculated_sum(start, end, result):
    partial_sum = sum(range(start, end + 1))
    result.append(partial_sum)


def thread_sum(limit):
    n = 4
    step = limit // n
    results = []

    threads = []
    for i in range(n):
        start = i * step + 1
        end = (i + 1) * step if i != n - 1 else limit
        thread = threading.Thread(target=calculated_sum, args=(start, end, results))
        thread.start()
        threads.append(thread)

    for thread in threads:
        thread.join()

    total_sum = sum(results)
    return total_sum


limit = 1000000
start_time = time.perf_counter()
total_sum = thread_sum(limit)
end_time = time.perf_counter()
total_runtime = end_time - start_time

print(f"Sum: {total_sum}")
print(f"Runtime: {total_runtime} seconds")
