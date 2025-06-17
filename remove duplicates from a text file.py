def remove_duplicates(file_path):
    with open(file_path, 'r') as f:
        lines = f.readlines()
    unique_lines = list(set(lines))
    with open(file_path, 'w') as f:
        f.writelines(unique_lines)
    print("Duplicates removed.")

# Example: remove_duplicates('data.txt')
